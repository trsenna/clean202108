<?php

namespace Clean\Customers;

use Clean\Contracts\Customers\Domain\Model\CustomerFactory;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Customers\Application\Commands\CustomerDestroy\CustomerDestroyHandler;
use Clean\Customers\Application\Commands\CustomerDestroy\CustomerDestroyHandlerInterface;
use Clean\Customers\Application\Commands\CustomerEdit\CustomerEditHandler;
use Clean\Customers\Application\Commands\CustomerEdit\CustomerEditHandlerInterface;
use Clean\Customers\Application\Commands\CustomerStore\CustomerStoreHandler;
use Clean\Customers\Application\Commands\CustomerStore\CustomerStoreHandlerInterface;
use Clean\Customers\Application\Queries\CustomerListHandler;
use Clean\Customers\Application\Queries\CustomerListHandlerInterface;
use Clean\Customers\Domain\Model\CustomerModelFactory;
use Clean\Customers\Domain\Model\CustomerModelRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(CustomerFactory::class, CustomerModelFactory::class);
        $this->app->bind(CustomerRepository::class, CustomerModelRepository::class);

        call_user_func(function () {
            // register command handlers
            $this->app->bind(CustomerDestroyHandlerInterface::class, CustomerDestroyHandler::class);
            $this->app->bind(CustomerEditHandlerInterface::class, CustomerEditHandler::class);
            $this->app->bind(CustomerStoreHandlerInterface::class, CustomerStoreHandler::class);
        });

        call_user_func(function () {
            // register query handlers
            $this->app->bind(CustomerListHandlerInterface::class, CustomerListHandler::class);
        });
    }
}
