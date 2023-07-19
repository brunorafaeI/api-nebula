<?php

namespace Domain\Usecases\User;

interface IRegisterPresenter
{
    public function present(RegisterUserOutput $userViewModel);
}
