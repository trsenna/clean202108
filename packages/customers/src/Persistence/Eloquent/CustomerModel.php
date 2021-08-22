<?php

namespace Clean\Customers\Persistence\Eloquent;

use Clean\Customers\Domain\Model\Customer;
use Clean\Foundation\Eloquent\AbstractModel;

final class CustomerModel extends AbstractModel implements Customer
{
    public function getName(): string
    {
        return $this->name;
    }
}
