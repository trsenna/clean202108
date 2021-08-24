<?php

namespace Clean\Foundation\Domain\Model;

use Clean\Contracts\Foundation\Domain\Model\Entity;
use Clean\Contracts\Foundation\Domain\Model\Identity;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model implements Entity
{
    public $incrementing = false;
    protected $keyType = 'string';

    public function setIdentity(Identity $identity): void
    {
        $this->id = $identity->value();
    }

    public function eloquent(): Model
    {
        return $this;
    }
}
