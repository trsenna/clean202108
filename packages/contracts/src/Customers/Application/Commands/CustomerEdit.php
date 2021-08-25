<?php

namespace Clean\Contracts\Customers\Application\Commands;

interface CustomerEdit
{
    public function getId(): string;
    public function getName(): string;
}
