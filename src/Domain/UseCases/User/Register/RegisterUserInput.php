<?php

namespace Domain\Usecases\User;

final class RegisterUserInput
{
    /**
     * @param string $liUser
     * @param string $liLogin
     * @param string $liEmail
     * @param string $idUserAuth
     * @param string|null $liPhoto
     * @param string|null $idMatricule
     */
    public function __construct(
        public readonly string $liUser,
        public readonly string $liLogin,
        public readonly string $liEmail,
        public readonly string $idUserAuth,
        public readonly ?string $liPhoto = null,
        public readonly ?string $idMatricule = null
    ) {}
}
