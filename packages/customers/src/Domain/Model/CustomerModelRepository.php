<?php

namespace Clean\Customers\Domain\Model;

use Clean\Contracts\Customers\Domain\Model\Customer;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Foundation\Persistence\Identity;
use Clean\Foundation\Persistence\AbstractModelRepository;

final class CustomerModelRepository extends AbstractModelRepository implements CustomerRepository
{
    public function ofIdentity(Identity $identity): Customer
    {
        return CustomerModel::findOrFail($identity->value());
    }
}
