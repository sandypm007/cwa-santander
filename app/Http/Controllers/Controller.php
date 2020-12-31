<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Contracts\Support\MessageBag;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Returns a success response using json.
     * @param array $data
     * @param string|null $message
     * @param integer $code
     * @return JsonResponse
     */
    protected function responseSuccess(array $data = [], string $message = null, int $code = 200): JsonResponse
    {
        if ($message) {
            $data['message'] = $message;
        }
        return response()->json($data, $code);
    }

    /**
     * Returns a failed response using json.
     * @param string $message
     * @param array $data
     * @param integer $code
     * @return JsonResponse
     */
    protected function responseFail(string $message, array $data = [], int $code = 400): JsonResponse
    {
        if ($message) {
            $data['message'] = $message;
        }
        return response()->json($data, $code);
    }

    /**
     * @param MessageBag $data
     * @return JsonResponse
     */
    protected function responseInputErrors(MessageBag $data): JsonResponse
    {
        $errors = ['success' => false, 'errors' => []];
        foreach ($data->getMessages() as $field => $message) {
            $errors['errors'][$field] = trim(join($message, '. '));
        }

        return response()->json($errors, 422);
    }

    /**
     * @return JsonResponse
     */
    public function responseAccessDenied(): JsonResponse
    {
        $data['message'] = trans('messages.access.denied');
        return response()->json($data, 401);
    }
}
