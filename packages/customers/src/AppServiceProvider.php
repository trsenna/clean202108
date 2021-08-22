<?php

namespace Clean\Customers;

use Clean\Customers\Application\Commands\CustomerStoreHandler;
use Clean\Customers\Application\Commands\CustomerStoreHandlerInterface;
use Clean\Customers\Application\Queries\CustomerListHandler;
use Clean\Customers\Application\Queries\CustomerListHandlerInterface;
use Clean\Customers\Domain\Model\CustomerFactory;
use Clean\Customers\Domain\Model\CustomerRepository;
use Clean\Customers\Persistence\Eloquent\CustomerModelFactory;
use Clean\Customers\Persistence\Eloquent\CustomerModelRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        CustomerFactory::class => CustomerModelFactory::class,
        CustomerListHandlerInterface::class => CustomerListHandler::class,
        CustomerRepository::class => CustomerModelRepository::class,
        CustomerStoreHandlerInterface::class => CustomerStoreHandler::class,
    ];
}
