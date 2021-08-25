<?php

namespace Clean\Contracts\Customers\Application\Commands;

use stdClass;

interface CustomerEditHandler
{
    public function execute(CustomerEdit $command): stdClass;
}
