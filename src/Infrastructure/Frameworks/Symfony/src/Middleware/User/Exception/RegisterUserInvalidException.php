<?php

namespace App\Middleware\User\Exception;

class RegisterUserInvalidException extends \Exception
{
    protected $code = 400;
}
