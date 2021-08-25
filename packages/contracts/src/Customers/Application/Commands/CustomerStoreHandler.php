<?php

namespace Clean\Contracts\Customers\Application\Commands;

interface CustomerEditHandler
{
    public function execute(CustomerStore $command): CustomerStoreResponse;
}
