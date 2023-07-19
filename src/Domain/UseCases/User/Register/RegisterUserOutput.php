<?php

namespace Domain\Usecases\User;

use Domain\Entity\User\UserEntity;

class RegisterUserOutput
{
    public function __construct(
       private readonly ?array $violations = null,
       private readonly ?UserEntity $userEntity = null
    ) {}

    public function getViolations(): ?array
    {
        return $this->violations;
    }

    public function getUser(): ?UserEntity
    {
        return $this->userEntity;
    }
}
