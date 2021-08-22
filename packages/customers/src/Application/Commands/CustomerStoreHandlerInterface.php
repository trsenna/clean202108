<?php

namespace Clean\Customers\Application\Commands;

interface CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $customerList): CustomerStoreResponse;
}
