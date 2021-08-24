<?php

namespace Clean\Customers\Domain\Model;

use Clean\Contracts\Customers\Domain\Model\Customer;
use Clean\Contracts\Foundation\Persistence\IdentityFactory;
use Clean\Foundation\Persistence\AbstractModel;
use Clean\Foundation\Persistence\UuidIdentityFactory;

final class CustomerModel extends AbstractModel implements Customer
{
    protected $table = 'customers';

    public function identityFactory(): IdentityFactory
    {
        return new UuidIdentityFactory();
    }

    public function getName(): string
    {
        return $this->name;
    }
}
