<?php

namespace Clean\Customers\Domain\Model;

use Clean\Contracts\Customers\Domain\Model\Customer;
use Clean\Contracts\Foundation\Domain\Model\Identity;
use Clean\Foundation\Domain\Model\AbstractModel;

final class CustomerModel extends AbstractModel implements Customer
{
    protected $table = 'customers';

    protected $fillable = ['name'];

    public function identity(): Identity
    {
        return CustomerId::factory()->of($this->id);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
