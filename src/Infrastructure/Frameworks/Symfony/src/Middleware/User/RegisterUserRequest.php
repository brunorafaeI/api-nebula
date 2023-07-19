<?php

namespace App\Middleware\User;

use Domain\Usecases\User\RegisterUserInput;
use App\Middleware\RequestValidation;
use App\Middleware\User\Exception\RegisterUserInvalidException;

class RegisterUserRequest extends RequestValidation
{
    /**
     * @throws RegisterUserInvalidException
     */
    protected function validateFormRequest(): void
    {
        $reflection = new \ReflectionClass(RegisterUserInput::class);
        $properties = array_keys($this->getFormRequest()->all());

        foreach ($properties as $prop) {
            if (!$reflection->hasProperty($prop)) {
                throw new RegisterUserInvalidException(
                    sprintf("Invalid property %s in form user.", $prop)
                );
            }
        }

    }

    /**
     * @throws RegisterUserInvalidException
     */
    public function validate(): void
    {
        $liUser = $this->getFormRequest()->get('liUser');
        $liLogin = $this->getFormRequest()->get('liLogin');

        if (!$liUser || !$liLogin) {
            throw new RegisterUserInvalidException();
        }
    }
}
