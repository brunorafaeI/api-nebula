<?php

namespace Domain\Interfaces\Repository;

interface IWriteRepository
{
    public function save(object $data): mixed;
    public function update(string $id, object $data): mixed;

}
