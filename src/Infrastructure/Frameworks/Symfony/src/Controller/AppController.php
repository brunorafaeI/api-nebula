<?php

namespace Infrastructure\Frameworks\Symfony\src\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function appIndex(): Response
    {
        return $this->json(["message" => "Hello world!"]);
    }
}
