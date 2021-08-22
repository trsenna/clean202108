<?php

namespace Clean\Foundation\Eloquent;

use Clean\Foundation\IdentityInterface;
use Illuminate\Database\Eloquent\Model;

interface EntityInterface
{
    public function setIdentity(IdentityInterface $identity): void;
    public function identity(): IdentityInterface;
    public function eloquent(): Model;
}
