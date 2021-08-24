<?php

namespace Clean\Contracts\Foundation\Persistence;

interface Repository
{
    public function ofIdentity(Identity $identity): Entity;
    public function add(Entity $entity): bool;
    public function merge(Entity $entity): bool;
    public function remove(Entity $entity): bool|null;
}
