<?php

namespace Clean\Contracts\Customers\Domain\Model;

use Clean\Contracts\Foundation\Domain\Model\Entity;

interface Customer extends Entity
{
    public function getName(): string;
}
