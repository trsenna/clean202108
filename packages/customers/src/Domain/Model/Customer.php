<?php

namespace Clean\Customers\Domain\Model;

use Clean\Foundation\Eloquent\EntityInterface;

interface Customer extends EntityInterface
{
    public function getName(): string;
}
