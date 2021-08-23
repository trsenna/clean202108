<?php

namespace Clean\Customers\Application\Commands\CustomerStore;

class CustomerStoreResponse
{
    public string $id;
    public string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
