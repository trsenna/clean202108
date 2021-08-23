<?php

namespace Clean\Foundation\Persistence;

use Illuminate\Support\Str;

final class UuidIdentityFactory
{
    public static function of(string $value)
    {
        return new UuidIdentity($value);
    }

    public static function next()
    {
        return static::of(Str::uuid());;
    }
}
