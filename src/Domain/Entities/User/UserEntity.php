<?php

namespace Domain\Entity\User;

final class UserEntity
{
    /**
     * @param string $idUser
     * @param string $liUser
     * @param string $liLogin
     * @param string $liEmail
     * @param string $idUserAuth
     * @param string|null $liPhoto
     * @param string|null $idMatricule
     * @param string|null $jsAccess
     */
    public function __construct(
        private string $idUser,
        private string $liUser,
        private string $liLogin,
        private string $liEmail,
        private string $idUserAuth,
        private ?string $liPhoto = null,
        private ?string $idMatricule = null,
        private ?string $jsAccess = null
    ) { }

    /**
     * @return string
     */
    public function getIdUser(): string
    {
        return $this->idUser;
    }

    /**
     * @return string
     */
    public function getLiUser(): string
    {
        return $this->liUser;
    }

    /**
     * @return string
     */
    public function getLiLogin(): string
    {
        return $this->liLogin;
    }

    /**
     * @return string
     */
    public function getLiEmail(): string
    {
        return $this->liEmail;
    }

    /**
     * @return string|null
     */
    public function getLiPhoto(): ?string
    {
        return $this->liPhoto;
    }

    /**
     * @return string|null
     */
    public function getIdMatricule(): ?string
    {
        return $this->idMatricule;
    }

    /**
     * @return string|null
     */
    public function getIdUserAuth(): ?string
    {
        return $this->idUserAuth;
    }

    /**
     * @return string|null
     */
    public function getJsAccess(): ?string
    {
        return $this->jsAccess;
    }
}
