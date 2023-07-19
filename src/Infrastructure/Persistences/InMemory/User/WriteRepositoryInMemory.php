<?php

namespace Infrastructure\Persistences\InMemory\User;

use Domain\Interfaces\Repository\IWriteRepository;

class WriteRepositoryInMemory implements IWriteRepository
{
    public function __construct(
        private array $users = []
    ) { }

    public function save(object $data): bool
    {
       if ($data->getIdUser()) {
           $this->users[$data->getIdUser()] = $data;
           return true;
       }
       return false;
    }

    public function update(string $id, object $data): bool
    {
       if (in_array($id, $this->users)) {
           $this->users[$id] = $data;
           return true;
       }
       return false;
    }
}
