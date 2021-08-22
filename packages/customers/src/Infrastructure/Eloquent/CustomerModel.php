<?php

namespace Clean\Customers\Infrastructure\Eloquent;

use Clean\Customers\DomainModel\Customer;
use Clean\Customers\DomainModel\CustomerId;
use Clean\Foundation\AbstractModel;

final class CustomerModel extends AbstractModel implements Customer
{
    public function identity(): CustomerId
    {
        return CustomerId::of($this->id);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
