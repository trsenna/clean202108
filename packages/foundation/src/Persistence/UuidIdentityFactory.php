<?php

namespace Clean\Foundation\Persistence;

use Clean\Contracts\Foundation\Persistence\Identity;
use Clean\Contracts\Foundation\Persistence\IdentityFactory;
use Illuminate\Support\Str;

final class UuidIdentityFactory implements IdentityFactory
{
    public function of(string $value): Identity
    {
        return new UuidIdentity($value);
    }

    public function next(): Identity
    {
        return $this->of(Str::uuid());
    }
}
