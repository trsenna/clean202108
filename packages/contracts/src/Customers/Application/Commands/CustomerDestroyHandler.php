<?php

namespace Clean\Contracts\Customers\Application\Commands;

interface CustomerDestroyHandler
{
    public function execute(CustomerDestroy $command): void;
}
