<?php

namespace Clean\Foundation\Eloquent;

use Clean\Foundation\Eloquent\EntityInterface;
use Clean\Foundation\IdentityInterface;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model implements EntityInterface
{
    protected $identity;

    public function setIdentity(IdentityInterface $identity): void
    {
        $this->identity = $identity;
    }

    public function identity(): IdentityInterface
    {
        return $this->identity;
    }

    public function eloquent(): Model
    {
        return $this;
    }
}
