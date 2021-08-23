<?php

namespace Clean\Customers\Application\Commands\CustomerStore;

class CustomerStore
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
