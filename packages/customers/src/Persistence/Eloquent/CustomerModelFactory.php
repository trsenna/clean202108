<?php

namespace Clean\Customers\Persistence\Eloquent;

use Clean\Customers\Domain\Model\Customer;
use Clean\Customers\Domain\Model\CustomerFactory;
use Clean\Foundation\IdentityFactory;

final class CustomerModelFactory implements CustomerFactory
{
    public function create(string $name): Customer
    {
        $identity = IdentityFactory::next();

        $customerModel = new CustomerModel();
        $customerModel->setIdentity($identity);
        $customerModel->name = $name;

        return $customerModel;
    }
}
