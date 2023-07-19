<?php

namespace App\Middleware;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

abstract class RequestValidation
{
    protected ?Request $request;

    final public function __construct(
        protected readonly RequestStack $requestStack,
        protected readonly ContainerInterface $container
    ) {
        $this->request = $requestStack->getCurrentRequest();
        $this->validateFormRequest();
    }

    abstract protected function validateFormRequest();

    final public function getFormRequest(): ParameterBag
    {
        return $this->request->request;
    }

    final public function getRequest(): Request
    {
        return $this->request;
    }
}
