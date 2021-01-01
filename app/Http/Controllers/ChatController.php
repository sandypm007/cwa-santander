<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ChatController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('chat');
    }

    public function users(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        if ($user->acl_level < 100) {
            return $this->responseAccessDenied();
        }

        $from = \DateTime::createFromFormat('U', $request->get('from'));

        $users = User::whereHas('sentMessages', function (Builder $query) use ($user, $from) {
            return $query
                ->where(function (Builder $query) use ($user) {
                    return $query->orWhere('from_user_id', $user->id)
                        ->orWhere('to_user_id', $user->id);
                })
                ->where('messages.created_at', '>=', $from->format('Y-m-d H:i:s'));
        })->where('users.id', '!=', $user->id)->get();

        $users = $users->toArray();
        foreach ($users as $i => $target) {
            $users[$i]['last_message'] = Message::where('created_at', '>=', $from->format('Y-m-d H:i:s'))
                ->where(function ($query) use ($target) {
                    return $query->orWhere(function ($query) use ($target) {
                        return $query->where('to_user_id', Auth::user()->id)
                            ->where('from_user_id', $target['id']);
                    })->orWhere(function ($query) use ($target) {
                        return $query->where('to_user_id', $target['id'])
                            ->where('from_user_id', Auth::user()->id);
                    });
                })
                ->orderBy('created_at', 'DESC')
                ->orderBy('id', 'ASC')
                ->selectRaw('max(created_at) as created_at')
                ->limit(1)
                ->first();
        }

        usort($users, function ($a, $b) {
            if ($a['last_message']['created_at'] < $b['last_message']['created_at']) {
                return 1;
            }
            return -1;
        });

        return $this->responseSuccess(null, ['to' => date('U'), 'entries' => $users]);
    }

    public function messages(Request $request)
    {
        $from = \DateTime::createFromFormat('U', $request->get('from'));
        $target = User::find($request->get('target'));

        if (!$target || !$from) {
            return $this->responseFail('Invalid request!');
        }

        /** @var Message $messages */
        $messages = Message::where('created_at', '>=', $from->format('Y-m-d H:i:s'))
            ->where(function ($query) use ($target) {
                return $query->orWhere(function ($query) use ($target) {
                    return $query->where('to_user_id', Auth::user()->id)
                        ->where('from_user_id', $target->id);
                })->orWhere(function ($query) use ($target) {
                    return $query->where('to_user_id', $target->id)
                        ->where('from_user_id', Auth::user()->id);
                });
            })
            ->orderBy('created_at', 'ASC')
            ->orderBy('id', 'ASC')
            ->get();
        $messages = $messages->toArray();

        return $this->responseSuccess(null, ['to' => count($messages) > 0 ? $messages[count($messages) - 1]['created_at'] + 1 : date('U'), 'entries' => $messages]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function handle(Request $request): JsonResponse
    {
        if (Auth::user()->acl_level < 100) {
            return $this->responseAccessDenied();
        }

        $validator = $this->getValidationFactory()->make(
            $request->all(),
            [
                'message' => 'required|max:500',
                'target' => 'exists:users,id',
            ],
            [
                'message.required' => trans('messages.validator.required_message'),
                'message.max' => trans('messages.validator.message_max'),
            ]
        );

        if ($validator->fails()) {
            return $this->responseInputErrors($validator->getMessageBag());
        }

        $user = User::find($request->get('target'));
        if (!$user) {
            return $this->responseFail(trans('messages.message.manager_not_found'));
        }

        $message = new Message();
        $message->message = $request->get('message');
        $message->from_user_id = Auth::user()->id;
        $message->to_user_id = $user->id;
        $message->save();

        return $this->responseSuccess(trans('messages.message.received'));
    }
}
