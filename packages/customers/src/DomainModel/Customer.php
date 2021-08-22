<?php

namespace Clean\Customers\DomainModel;

use Clean\Foundation\Eloquent\EntityInterface;

interface Customer extends EntityInterface
{
    public function identity(): CustomerId;
    public function getName(): string;
}
