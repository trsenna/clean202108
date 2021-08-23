<?php

namespace Clean\Contracts\Foundation\Persistence;

interface IdentityFactory
{
    public function of(string $value): Identity;
    public function next(): Identity;
}
