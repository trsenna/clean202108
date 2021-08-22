<?php

namespace App\Clean\Application\Commands;

use App\Clean\Application\CustomerStored;
use Illuminate\Support\Str;

class CustomerStoreHandler implements CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $customerStore): CustomerStoreResponse
    {
        $id = Str::uuid();

        event(new CustomerStored($id, $customerStore->name));

        return new CustomerStoreResponse(
            $id,
            $customerStore->name
        );
    }
}
