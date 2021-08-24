<?php

namespace Clean\Contracts\Foundation\Domain\Model;

interface Identity
{
    public function value(): string;
    public function sameAs(Identity $identity): bool;
}
