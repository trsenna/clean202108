<?php

namespace App\Providers;

use App\Clean\Application\Commands\CustomerStoreHandler;
use App\Clean\Application\Commands\CustomerStoreHandlerInterface;
use App\Clean\Application\Queries\CustomerListHandler;
use App\Clean\Application\Queries\CustomerListHandlerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        CustomerStoreHandlerInterface::class => CustomerStoreHandler::class,
        CustomerListHandlerInterface::class => CustomerListHandler::class,
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
