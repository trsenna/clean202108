<?php

namespace Clean\Customers\Infrastructure\Eloquent;

use Clean\Customers\Domain\Model\Customer;
use Clean\Foundation\AbstractModel;

final class CustomerModel extends AbstractModel implements Customer
{
    public function getName(): string
    {
        return $this->name;
    }
}
