<?php

namespace Clean\Foundation;

use Illuminate\Support\Str;

abstract class AbstractIdentity implements IdentityInterface
{
    private $value;

    protected function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function sameAs(IdentityInterface $identity): bool
    {
        return $identity->value() === $this->value;
    }

    public static function of(string $value)
    {
        return new static($value);
    }

    public static function next()
    {
        return static::of(Str::uuid());;
    }
}
