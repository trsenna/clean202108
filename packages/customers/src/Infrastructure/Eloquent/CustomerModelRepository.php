<?php

namespace Clean\Customers\Infrastructure\Eloquent;

use Clean\Customers\Domain\Model\Customer;
use Clean\Customers\Domain\Model\CustomerRepository;

final class CustomerModelRepository implements CustomerRepository
{
    public function add(Customer $customer): void
    {
        $eloquentModel = $customer->eloquent();
        $eloquentModel->save();
    }
}
