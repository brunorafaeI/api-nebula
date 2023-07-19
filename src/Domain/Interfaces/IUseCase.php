<?php

namespace Domain\Interfaces;
interface IUseCase
{
    public function execute(IUseCaseInput $input, ?IUseCaseOutput $output): ?IUseCaseOutput;
}
