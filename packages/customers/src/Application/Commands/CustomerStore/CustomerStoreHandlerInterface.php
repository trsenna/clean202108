<?php

namespace Clean\Customers\Application\Commands\CustomerStore;

interface CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $command): CustomerStoreResponse;
}
