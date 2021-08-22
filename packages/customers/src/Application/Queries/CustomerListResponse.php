<?php

namespace Clean\Customers\Application\Queries;

class CustomerListResponse
{
    public array $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }
}
