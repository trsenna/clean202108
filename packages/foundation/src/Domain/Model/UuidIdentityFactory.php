<?php

namespace Clean\Foundation\Domain\Model;

use Clean\Contracts\Foundation\Domain\Model\Identity;
use Clean\Contracts\Foundation\Domain\Model\IdentityFactory;
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
