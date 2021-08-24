<?php

namespace Clean\Customers\Domain\Model;

use Clean\Contracts\Foundation\Domain\Model\IdentityFactory;
use Clean\Foundation\Domain\Model\UuidIdentityFactory;

abstract class CustomerId
{
    public static function factory(): IdentityFactory
    {
        static $factory;

        if (!isset($factory)) {
            $factory = new UuidIdentityFactory();
        }

        return $factory;
    }
}
