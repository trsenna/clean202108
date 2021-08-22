<?php

namespace Clean\Customers\Persistence\Eloquent;

use Clean\Customers\Domain\Model\Customer;
use Clean\Customers\Domain\Model\CustomerRepository;
use Clean\Foundation\IdentityInterface;

final class CustomerModelRepository implements CustomerRepository
{
    public function ofIdentity(IdentityInterface $identity): Customer
    {
        return CustomerModel::findOrFail($identity->value());
    }

    public function add(Customer $customer): void
    {
        $eloquentModel = $customer->eloquent();
        $eloquentModel->save();
    }

    public function remove(Customer $customer): void
    {
        $eloquentModel = $customer->eloquent();
        $eloquentModel->delete();
    }
}
