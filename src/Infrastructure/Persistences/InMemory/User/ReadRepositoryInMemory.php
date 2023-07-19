<?php

namespace Infrastructure\Persistences\InMemory\User;

use Domain\Interfaces\Repository\IReadRepository;

class ReadRepositoryInMemory implements IReadRepository
{

    public function __construct(
        private readonly array $users = []
    ) {}

    public function find(?array $criteria): ?array
    {
       return array_filter($this->users, function($user) use ($criteria) {
           foreach ($criteria as $key => $value) {
               if (property_exists($user, $key)) {
                   return $user->$key() === $value;
               }
           }
           return [];
       });
    }
}
