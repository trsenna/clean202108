<?php

namespace Clean\Contracts\Customers\Application\Commands;

use stdClass;

interface CustomerStoreHandler
{
    public function execute(CustomerStore $command): stdClass;
}
