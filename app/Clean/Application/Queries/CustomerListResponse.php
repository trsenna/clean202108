<?php

namespace App\Clean\Application\Queries;

class CustomerListResponse
{
    public array $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }
}
