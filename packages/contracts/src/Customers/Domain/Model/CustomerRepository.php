<?php

namespace Clean\Contracts\Customers\Domain\Model;

use Clean\Contracts\Foundation\Domain\Model\Identity;
use Clean\Contracts\Foundation\Domain\Model\Repository;

interface CustomerRepository extends Repository
{
    public function ofIdentity(Identity $identity): Customer;
}
