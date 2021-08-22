<?php

namespace Clean\Customers\DomainModel;

use Illuminate\Support\Str;

final class CustomerId
{
    public $identity;

    private function __construct(string $identity)
    {
        $this->identity = $identity;
    }

    public static function of(string $identity)
    {
        return new static($identity);
    }

    public static function next()
    {
        return static::of(Str::uuid());;
    }
}
