<?php

namespace App\Exceptions;

use Exception;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class ProductNotBelongsToUser extends Exception
{
    public function render(){
        return ['error' => 'Product not belongs to User'];
    }
}
