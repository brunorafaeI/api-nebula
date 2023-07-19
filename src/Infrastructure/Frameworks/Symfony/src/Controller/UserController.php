<?php

namespace App\Controller;

use Domain\Usecases\User\RegisterUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Middleware\User\RegisterUserRequest;

class UserController extends AbstractController
{
    #[Route('/users', name: 'user_index')]
    public function userIndex(
        RegisterUserRequest $request,
        RegisterUser $registerUser
    ) {

    }
}
