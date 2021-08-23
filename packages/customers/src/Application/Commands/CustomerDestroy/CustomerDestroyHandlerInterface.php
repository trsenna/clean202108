<?php

namespace Clean\Customers\Application\Commands\CustomerDestroy;

interface CustomerDestroyHandlerInterface
{
    public function execute(CustomerDestroy $command): void;
}
