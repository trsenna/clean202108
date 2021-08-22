<?php

namespace Clean\Customers\Application\Queries;

interface CustomerListHandlerInterface
{
    public function execute(CustomerList $customerList): CustomerListResponse;
}
