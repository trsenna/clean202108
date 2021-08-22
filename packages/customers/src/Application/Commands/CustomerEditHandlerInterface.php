<?php

namespace Clean\Customers\Application\Commands;

interface CustomerEditHandlerInterface
{
    public function execute(CustomerEdit $command): CustomerEditResponse;
}
