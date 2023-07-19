<?php

namespace Domain\Interfaces\Repository;

interface IReadRepository
{
    public function find(?array $criteria): ?array;
}
