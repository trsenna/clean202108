<?php

namespace Clean\Customers\Infrastructure\Eloquent;

use Clean\Customers\DomainModel\Customer;
use Clean\Customers\DomainModel\CustomerRepository;

final class CustomerModelRepository implements CustomerRepository
{
    public function add(Customer $customer): void
    {
        $eloquentModel = $customer->eloquent();
        $eloquentModel->save();
    }
}
