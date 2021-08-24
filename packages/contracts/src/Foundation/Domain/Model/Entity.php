<?php

namespace Clean\Contracts\Foundation\Domain\Model;

use Illuminate\Database\Eloquent\Model;

interface Entity
{
    public function setIdentity(Identity $identity): void;
    public function identity(): Identity;
    public function identityFactory(): IdentityFactory;
    public function eloquent(): Model;
}
