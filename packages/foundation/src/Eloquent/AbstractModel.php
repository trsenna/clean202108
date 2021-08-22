<?php

namespace Clean\Foundation\Eloquent;

use Clean\Foundation\Eloquent\EntityInterface;
use Clean\Foundation\IdentityFactory;
use Clean\Foundation\IdentityInterface;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model implements EntityInterface
{
    public $incrementing = false;
    protected $keyType = 'string';

    public function setIdentity(IdentityInterface $identity): void
    {
        $this->id = $identity->value();
    }

    public function identity(): IdentityInterface
    {
        return IdentityFactory::of($this->id);
    }

    public function eloquent(): Model
    {
        return $this;
    }
}
