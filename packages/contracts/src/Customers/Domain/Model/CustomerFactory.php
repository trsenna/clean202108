<?php

namespace Clean\Contracts\Customers\Domain\Model;

interface CustomerFactory
{
    public function create(array $values): Customer;
}
