<?php

namespace Clean\Events\Customers\Application;

use Clean\Contracts\Events\Application\Event;

class CustomerDestroyed implements Event
{
    public string $id;
    public string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
