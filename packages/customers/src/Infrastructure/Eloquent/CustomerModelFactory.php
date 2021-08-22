<?php

namespace Clean\Customers\Infrastructure\Eloquent;

use Clean\Customers\DomainModel\Customer;
use Clean\Customers\DomainModel\CustomerFactory;
use Clean\Customers\DomainModel\CustomerId;

final class CustomerModelFactory implements CustomerFactory
{
    public function create(string $name): Customer
    {
        $customerModel = new CustomerModel();
        $customerModel->setIdentity(CustomerId::next());
        $customerModel->name = $name;

        return $customerModel;
    }
}
