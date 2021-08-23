<?php

namespace Clean\Contracts\Foundation\Persistence;

interface Identity
{
    public function value(): string;
    public function sameAs(Identity $identity): bool;
}
