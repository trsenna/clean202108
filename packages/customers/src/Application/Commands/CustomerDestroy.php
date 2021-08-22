<?php

namespace Clean\Customers\Application\Commands;

class CustomerDestroy
{
    public string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
