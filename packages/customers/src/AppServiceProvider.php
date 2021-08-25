<?php

namespace Clean\Customers;

use Clean\Contracts\Customers\Application\Commands\CustomerDestroyHandler as CustomerDestroyHandlerContract;
use Clean\Contracts\Customers\Application\Commands\CustomerEditHandler as CustomerEditHandlerContract;
use Clean\Contracts\Customers\Application\Commands\CustomerStoreHandler as CustomerStoreHandlerContract;
use Clean\Contracts\Customers\Domain\Model\CustomerFactory;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Customers\Application\Commands\CustomerDestroyHandler;
use Clean\Customers\Application\Commands\CustomerEditHandler;
use Clean\Customers\Application\Commands\CustomerStoreHandler;
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
            $this->app->bind(CustomerDestroyHandlerContract::class, CustomerDestroyHandler::class);
            $this->app->bind(CustomerEditHandlerContract::class, CustomerEditHandler::class);
            $this->app->bind(CustomerStoreHandlerContract::class, CustomerStoreHandler::class);
        });

        call_user_func(function () {
            // register query handlers
            $this->app->bind(CustomerListHandlerInterface::class, CustomerListHandler::class);
        });
    }
}
