<?php

namespace Clean\Contracts\Customers\Application\Commands;

use Clean\Contracts\Foundation\Application\Response;

interface CustomerStoreHandler
{
    public function execute(CustomerStore $command): Response;
}
