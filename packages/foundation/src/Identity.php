<?php

namespace Clean\Foundation;

final class Identity implements IdentityInterface
{
    private $value;

    public function __construct(string $value)
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
}
