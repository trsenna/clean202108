<?php

namespace App\Clean\Application\Commands;

use App\Clean\Application\CustomerStored;
use App\Clean\DomainModel\Customer;
use App\Clean\DomainModel\CustomerId;
use Illuminate\Support\Str;

class CustomerStoreHandler implements CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $customerStore): CustomerStoreResponse
    {
        $customerId = CustomerId::next();

        $customer = new Customer($customerId);
        $customer->name = $customerStore->name;
        $customer->save();

        event(new CustomerStored($customerId->identity, $customerStore->name));

        return new CustomerStoreResponse(
            $customerId->identity,
            $customerStore->name
        );
    }
}
