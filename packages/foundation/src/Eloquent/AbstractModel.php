<?php

namespace Clean\Foundation;

use Clean\Foundation\Eloquent\EntityInterface;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model implements EntityInterface
{
    public function setIdentity(IdentityInterface $identity): void
    {
        $this->id = $identity->value();
    }

    public function eloquent(): Model
    {
        return $this;
    }
}
