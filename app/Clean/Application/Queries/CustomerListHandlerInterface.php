<?php

namespace App\Clean\Application\Queries;

interface CustomerListHandlerInterface
{
    public function execute(CustomerList $customerList): CustomerListResponse;
}
