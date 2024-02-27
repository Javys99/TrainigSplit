<?php

namespace App\Traits\Helpers;

trait ResponseTrait
{
    public function customResponse(array $options = []){
        $data = $options['data'] ?? null;
        $view = $options['view'] ?? null;
        $redirect = $options['redirect'] ?? null;
        $message = $options['message'] ?? '';
        $exception = $options['exception'] ?? null;
        $success = $options['success'] ?? true;
        $status = $options['status'] ?? 200;

        if($success){
            if($view){
                return view($view)->with('users', $data);
            }else{
                return redirect($redirect);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => $message,
                'exception' => $exception,
                'data' => $data
            ], $status);
        }
    }

    public function successResponse($data, $message = null, $code = 200)
    {
        try {
            if (is_null($message)) {
                $message = 'Success';
            }
            return response()->json([
                'status' => 'success',
                'message' => $message,
                'data' => $data
            ], $code);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    public function errorResponse($message, $code)
    {
        try {
            return response()->json([
                'status' => 'error',
                'message' => $message
            ], $code);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }
}