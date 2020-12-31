<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function handle(Request $request): JsonResponse
    {
        if (Auth::user()->acl_level > 0) {
            return $this->responseAccessDenied();
        }

        $validator = $this->getValidationFactory()->make(
            $request->all(),
            [
                'message' => 'required|max:500',
            ],
            [
                'message.required' => trans('messages.validator.required_message'),
                'message.max' => trans('messages.validator.message_max'),
            ]
        );

        if ($validator->fails()) {
            return $this->responseInputErrors($validator->getMessageBag());
        }

        $manager = User::where('acl_level', User::MANAGER)->first();
        if (!$manager) {
            return $this->responseFail(trans('messages.message.manager_not_found'));
        }

        $message = new Message();
        $message->message = $request->get('message');
        $message->from_user_id = Auth::user()->id;
        $message->to_user_id = $manager->id;
        $message->save();

        return $this->responseSuccess(trans('messages.message.received'));
    }

    public function list(Request $request)
    {
        if (Auth::user()->acl_level > 0) {
            return $this->responseAccessDenied();
        }

        $from = \DateTime::createFromFormat('U', $request->get('from'));

        $manager = User::where('acl_level', User::MANAGER)->first();
        if (!$manager) {
            return $this->responseFail(trans('messages.message.manager_not_found'));
        }

        /** @var Message $messages */
        $messages = Message::where('created_at', '>=', $from->format('Y-m-d H:i:s'))
            ->where(function ($query) use ($manager) {
                return $query->orWhere(function ($query) use ($manager) {
                    return $query->where('to_user_id', Auth::user()->id)
                        ->where('from_user_id', $manager->id);
                })->orWhere(function ($query) use ($manager) {
                    return $query->where('to_user_id', $manager->id)
                        ->where('from_user_id', Auth::user()->id);
                });
            })
            ->orderBy('created_at', 'ASC')
            ->orderBy('id', 'ASC')
            ->get();
        $messages = $messages->toArray();

        return $this->responseSuccess(null, ['to' => count($messages) > 0 ? $messages[count($messages) - 1]['created_at'] + 1 : date('U'), 'entries' => $messages]);
    }
}
