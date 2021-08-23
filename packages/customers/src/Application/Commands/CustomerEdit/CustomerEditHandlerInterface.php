<?php

namespace Clean\Customers\Application\Commands\CustomerEdit;

interface CustomerEditHandlerInterface
{
    public function execute(CustomerEdit $command): CustomerEditResponse;
}
