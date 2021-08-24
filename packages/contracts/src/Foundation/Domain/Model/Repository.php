<?php

namespace Clean\Contracts\Foundation\Domain\Model;

interface Repository
{
    public function ofIdentity(Identity $identity): Entity;
    public function add(Entity $entity): bool;
    public function merge(Entity $entity): bool;
    public function remove(Entity $entity): ?bool;
}
