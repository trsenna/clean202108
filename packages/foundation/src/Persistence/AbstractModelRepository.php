<?php

namespace Clean\Foundation\Persistence;

use Clean\Contracts\Foundation\Domain\Model\Entity;
use Clean\Contracts\Foundation\Domain\Model\Repository;

abstract class AbstractModelRepository implements Repository
{
    public function add(Entity $entity): bool
    {
        $eloquentModel = $entity->eloquent();
        return $eloquentModel->save();
    }

    public function merge(Entity $entity): bool
    {
        $eloquentModel = $entity->eloquent();
        return $eloquentModel->save();
    }

    public function remove(Entity $entity): bool|null
    {
        $eloquentModel = $entity->eloquent();
        return $eloquentModel->delete();
    }
}
