<?php

namespace Clean\Contracts\Customers\Application\Commands;

use Clean\Contracts\Foundation\Application\Response;

interface CustomerDestroyHandler
{
    public function execute(CustomerDestroy $command): Response;
}
