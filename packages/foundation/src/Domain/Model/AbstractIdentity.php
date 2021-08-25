<?php

namespace Clean\Foundation\Domain\Model;

use Clean\Contracts\Foundation\Domain\Model\Identity;

abstract class AbstractIdentity implements Identity
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function sameAs(Identity $identity): bool
    {
        return $identity->value() === $this->value;
    }
}
