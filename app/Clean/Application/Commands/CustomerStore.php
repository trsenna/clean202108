<?php

namespace App\Clean\Application\Commands;

class CustomerStore
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
