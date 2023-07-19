<?php

namespace Domain\Usecases\User\Exceptions\User;

class UserAlreadyExistsException extends \Exception
{
    protected $message = "User already exists.";
    protected $code = 400;
}
