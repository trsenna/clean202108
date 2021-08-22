<?php

namespace Clean\Customers\Application\Commands;

interface CustomerStoreHandlerInterface
{
    public function execute(CustomerStore $command): CustomerStoreResponse;
}
