<?php

namespace App\Clean\Application\Queries;

class CustomerListHandler implements CustomerListHandlerInterface
{
    public function execute(CustomerList $customerList): CustomerListResponse
    {
        return new CustomerListResponse([]);
    }
}
