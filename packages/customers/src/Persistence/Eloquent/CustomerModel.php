<?php

namespace Clean\Customers\Persistence\Eloquent;

use Clean\Customers\Domain\Model\Customer;
use Clean\Foundation\Eloquent\AbstractModel;

final class CustomerModel extends AbstractModel implements Customer
{
    protected $table = 'customers';

    public function getName(): string
    {
        return $this->name;
    }
}
