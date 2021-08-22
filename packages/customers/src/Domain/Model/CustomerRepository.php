<?php

namespace Clean\Customers\Domain\Model;

interface CustomerRepository
{
    public function add(Customer $customer): void;
}
