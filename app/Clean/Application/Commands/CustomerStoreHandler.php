<?php

namespace App\Clean\Application\Commands;

use Illuminate\Support\Str;

class CustomerStoreHandler implements CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $customerStore): CustomerStoreResponse
    {
        return new CustomerStoreResponse(
            Str::uuid(),
            $customerStore->name
        );
    }
}
