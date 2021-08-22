<?php

namespace Clean\Customers\DomainModel;

interface CustomerFactory
{
    public function create(string $name): Customer;
}
