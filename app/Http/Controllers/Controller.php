<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Returns a success response using json.
     * @param string|null $message
     * @param array $data
     * @param integer $code
     * @return JsonResponse
     */
    protected function responseSuccess(string $message = null, array $data = [], int $code = 200): JsonResponse
    {
        if ($message) {
            $data['message'] = $message;
        }

        if (!empty($data)) {
            $data['success'] = true;
        }

        return response()->json($data, empty($data) && $code === 200 ? 204 : $code);
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
            $errors['errors'][$field] = trim(join('. ', $message));
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
