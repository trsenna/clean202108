<?php

namespace Clean\Contracts\Customers\Domain\Model;

use Clean\Contracts\Foundation\Persistence\Entity;

interface Customer extends Entity
{
    public function getName(): string;
}
