<?php

namespace Clean\Customers\DomainModel;

interface CustomerRepository
{
    public function add(Customer $customer): void;
}
