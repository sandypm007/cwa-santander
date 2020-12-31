<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
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

    public function list(Request $request)
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
            $users[$i]['messages'] = Message::where('created_at', '>=', $from->format('Y-m-d H:i:s'))
                ->where(function ($query) use ($target) {
                    return $query->orWhere(function ($query) use ($target) {
                        return $query->where('to_user_id', Auth::user()->id)
                            ->where('from_user_id', $target['id']);
                    })->orWhere(function ($query) use ($target) {
                        return $query->where('to_user_id', $target['id'])
                            ->where('from_user_id', Auth::user()->id);
                    });
                })
                ->orderBy('created_at', 'ASC')
                ->orderBy('id', 'ASC')
                ->get();
        }

        return $this->responseSuccess(null, ['to' => date('U'), 'entries' => $users]);
    }
}
