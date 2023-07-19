<?php

namespace Domain\Usecases\User;

use Domain\Interfaces\Repository\IReadRepository;
use Domain\Interfaces\Repository\IWriteRepository;
use Domain\Usecases\User\Exceptions\User\UserAlreadyExistsException;

class RegisterUser implements IRegisterUser
{
    public function __construct(
        private readonly IWriteRepository $writeRepository,
        private readonly IReadRepository $readRepository
    ) {}

    /**
     * @throws UserAlreadyExistsException
     */
    public function execute(RegisterUserInput $userInput, IRegisterPresenter $presenter): bool
    {
        if ($this->userIsAlreadyRegistered($userInput)) {
            throw new UserAlreadyExistsException();
        }

        $userCreated = $this->writeRepository->save($userInput);
        $userToCreate = new RegisterUserOutput($userCreated);

        return $presenter->present($userToCreate);
    }

    private function userIsAlreadyRegistered(RegisterUserInput $userInput): bool
    {
        return current($this->readRepository->find([ 'liEmail' => $userInput->liEmail ]));
    }
}
