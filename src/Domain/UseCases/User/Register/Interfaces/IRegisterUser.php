<?php

namespace Domain\Usecases\User;

interface IRegisterUser
{
    public function execute(RegisterUserInput $userInput, IRegisterPresenter $presenter): bool;
}
