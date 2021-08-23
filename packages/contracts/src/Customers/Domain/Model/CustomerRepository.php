<?php

namespace Clean\Contracts\Customers\Domain\Model;

use Clean\Contracts\Foundation\Persistence\Identity;
use Clean\Contracts\Foundation\Persistence\Repository;

interface CustomerRepository extends Repository
{
    public function ofIdentity(Identity $identity): Customer;
}
