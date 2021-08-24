<?php

namespace Clean\Foundation\Persistence;

use Clean\Contracts\Foundation\Domain\Model\Identity;
use Illuminate\Support\Str;
use InvalidArgumentException;

final class UuidIdentity implements Identity
{
    private $value;

    public function __construct(string $value)
    {
        $this->assertValidUuid($value);
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

    private function assertValidUuid(string $value): void
    {
        if (!Str::isUuid($value)) {
            throw new InvalidArgumentException('the given value is not a valid UUID');
        }
    }
}
