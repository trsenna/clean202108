<?php

namespace Clean\Foundation;

use Illuminate\Support\Str;

final class IdentityFactory
{
    public static function of(string $value)
    {
        return new Identity($value);
    }

    public static function next()
    {
        return static::of(Str::uuid());;
    }
}
