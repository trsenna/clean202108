<?php

namespace Clean\Customers\DomainModel;

use Clean\Foundation\AbstractIdentity;

final class CustomerId extends AbstractIdentity
{
    protected function __construct(string $value)
    {
        parent::__construct($value);
    }
}
