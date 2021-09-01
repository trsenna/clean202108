<?php

namespace Clean\Contracts\Customers\Application\Commands;

use Clean\Contracts\Foundation\Application\Response;

interface CustomerEditHandler
{
    public function execute(CustomerEdit $command): Response;
}
