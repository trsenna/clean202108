<?php

namespace Clean\Foundation;

interface IdentityInterface
{
    public function value(): string;
    public function sameAs(IdentityInterface $identity): bool;
}
