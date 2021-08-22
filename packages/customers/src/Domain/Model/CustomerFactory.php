<?php

namespace Clean\Customers\Domain\Model;

interface CustomerFactory
{
    public function create(string $name): Customer;
}
