<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'index']]);
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('login');
    }

    public function logout()
    {
        auth()->logout();
        return response()->redirectTo('/');
    }

    /**
     * Get a session via given credentials.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $validator = $this->getValidationFactory()->make(
            $request->all(),
            [
                'password' => 'required',
                'email' => 'required|email'
            ],
            [
                'email.required' => trans('messages.validator.required_email'),
                'email.email' => trans('messages.validator.invalid_email'),
                'password.required' => trans('messages.validator.required_password'),
            ]
        );

        if ($validator->fails()) {
            return $this->responseInputErrors($validator->getMessageBag());
        }

        $credentials = $request->only(['email', 'password']);
        /** @var User $user */
        $user = User::where('email', $credentials['email'])->first();
        if (!$user) {
            return $this->responseFail(trans('messages.user.not_found'), [], 404);
        }

        if (!$user->active) {
            return $this->responseFail(trans('messages.user.not_active'));
        }

        if (!app('hash')->check($credentials['password'], $user->password)) {
            return $this->responseFail(trans('messages.access.password'));
        }

        Auth::login($user);
        return $this->responseSuccess(null, ['continue_to' => route('homepage')]);
    }
}
