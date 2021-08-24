<?php

namespace Clean\Customers\Domain\Model;

use Clean\Contracts\Customers\Domain\Model\Customer;
use Clean\Contracts\Customers\Domain\Model\CustomerFactory;

final class CustomerModelFactory implements CustomerFactory
{
    public function create(array $values): Customer
    {
        $customerModel = new CustomerModel();
        $customerModelIdentityFactory = $customerModel->identityFactory();
        $customerModel->setIdentity($customerModelIdentityFactory->next());

        $customerModel->fill([
            'name' => strval($values['name']),
        ]);

        return $customerModel;
    }
}
