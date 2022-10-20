<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Facade\FlareClient\Http\Response;

trait ExceptionsTrait
{
    public function apiException($request, $ex)
    {

        if ($this->isModel($ex)) {
            return $this->ModelResponse($ex);
        }
        if ($this->isHTTP($ex)) {
            return $this->HttpResponse($ex);
        }
    }

    public function isModel($ex)
    {
        return $ex instanceof ModelNotFoundException;
    }

    public function isHTTP($ex)
    {
        return $ex instanceof NotFoundHttpException;
    }
    public function ModelResponse($ex)
    {
        return response()->json([
            "error" => "Product not found"
        ], 404);
    }
    public function HttpResponse($ex)
    {
        return response()->json([
            "error" => "Route Not Found"
        ], 404);
    }
}
