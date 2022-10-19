<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class APIExceptionHandler extends Exception
{
    
    public function report(){

    }
    
    public function render($request){
        return new JsonResponse([
            "error" => [
                "message" => $this->getMessage("Product not found")
            ]
        ], $this->code);
    }

}
