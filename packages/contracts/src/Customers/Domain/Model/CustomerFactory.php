<?php

namespace Clean\Contracts\Customers\Domain\Model;

use Clean\Contracts\Foundation\Persistence\Entity;

interface CustomerFactory extends Entity
{
    public function create(array $values): Customer;
}
