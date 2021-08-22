<?php

namespace Clean\Customers\Application\Commands;

interface CustomerDestroyHandlerInterface
{
    public function execute(CustomerDestroy $command): void;
}
