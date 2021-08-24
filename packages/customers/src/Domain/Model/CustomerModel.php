<?php

namespace Clean\Customers\Domain\Model;

use Clean\Contracts\Customers\Domain\Model\Customer;
use Clean\Contracts\Foundation\Domain\Model\IdentityFactory;
use Clean\Foundation\Domain\Model\AbstractModel;
use Clean\Foundation\Domain\Model\UuidIdentityFactory;

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
