<?php

namespace App\Providers;

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
        CustomerStoreHandlerInterface::class => CustomerStoreHandler::class,
        CustomerListHandlerInterface::class => CustomerListHandler::class,
        CustomerFactory::class => CustomerModelFactory::class,
        CustomerRepository::class => CustomerModelRepository::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
