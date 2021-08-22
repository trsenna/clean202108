<?php

namespace Clean\Customers\Domain\Model;

use Clean\Foundation\IdentityInterface;

interface CustomerRepository
{
    public function ofIdentity(IdentityInterface $identity): Customer;
    public function add(Customer $customer): void;
    public function remove(Customer $customer): void;
}
