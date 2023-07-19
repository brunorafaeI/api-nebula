<?php

namespace Unit\Domain\Usecases\User;

use Domain\Usecases\User\RegisterUser;
use Domain\Usecases\User\RegisterUserInput;
use Infrastructure\Persistences\InMemory\User\ReadRepositoryInMemory;
use Infrastructure\Persistences\InMemory\User\WriteRepositoryInMemory;
use PHPUnit\Framework\TestCase;

class RegisterUserTest extends TestCase
{

    public function testItShouldRegisterANewUser()
    {
        $writeRepositoryMock = $this->createMock(WriteRepositoryInMemory::class);
        $readRepositoryMock = $this->createMock(ReadRepositoryInMemory::class);

        $writeRepositoryMock
            ->expects($this->once())
            ->method('save')
            ->willReturn(true);

        // Arrange
        $registerUser = new RegisterUser(
            writeRepository: $writeRepositoryMock,
            readRepository: $readRepositoryMock
        );

        $userData = new RegisterUserInput(
            liUser: 'John Doe',
            liLogin: 'jdoe',
            liEmail: 'jhon.doe@mail.com',
            idUserAuth: 1
        );

        // Act
        $result = $registerUser->execute($userData);

        // Assert
        $this->assertTrue($result);
    }
}
