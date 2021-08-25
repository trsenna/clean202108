<?php

namespace Clean\Contracts\Customers\Application\Commands;

interface CustomerEditHandler
{
    public function execute(CustomerEdit $command): CustomerEditResponse;
}
