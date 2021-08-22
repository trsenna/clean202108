<?php

namespace Clean\Customers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        Clean\Customers\Application\Commands\CustomerDestroyHandlerInterface::class => Clean\Customers\Application\Commands\CustomerDestroyHandler::class,
        Clean\Customers\Application\Commands\CustomerEditHandlerInterface::class => Clean\Customers\Application\Commands\CustomerEditHandler::class,
        Clean\Customers\Application\Commands\CustomerListHandlerInterface::class => Clean\Customers\Application\Commands\CustomerListHandler::class,
        Clean\Customers\Application\Commands\CustomerStoreHandlerInterface::class => Clean\Customers\Application\Commands\CustomerStoreHandler::class,
        Clean\Customers\Domain\Model\CustomerFactory::class => Clean\Customers\Persistence\Eloquent\CustomerModelFactory::class,
        Clean\Customers\Domain\Model\CustomerRepository::class => Clean\Customers\Persistence\Eloquent\CustomerModelRepository::class,
    ];
}
