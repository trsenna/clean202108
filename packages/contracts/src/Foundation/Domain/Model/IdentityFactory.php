<?php

namespace Clean\Contracts\Foundation\Domain\Model;

interface IdentityFactory
{
    public function of(string $value): Identity;
    public function next(): Identity;
}
