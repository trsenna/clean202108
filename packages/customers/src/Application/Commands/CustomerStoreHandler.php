<?php

namespace Clean\Customers\Application\Commands;

use Clean\Customers\Application\CustomerStored;
use Clean\Customers\DomainModel\Customer;
use Clean\Customers\DomainModel\CustomerId;

class CustomerStoreHandler implements CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $customerStore): CustomerStoreResponse
    {
        $customerId = CustomerId::next();

        // $customer = new Customer($customerId);
        // $customer->name = $customerStore->name;
        // $customer->save();

        event(new CustomerStored($customerId->identity, $customerStore->name));

        return new CustomerStoreResponse(
            $customerId->identity,
            $customerStore->name
        );
    }
}
