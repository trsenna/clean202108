<?php

namespace App\Clean\Application\Commands;

interface CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $customerList): CustomerStoreResponse;
}
