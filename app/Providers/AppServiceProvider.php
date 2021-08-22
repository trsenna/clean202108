<?php

namespace App\Providers;

use App\Clean\Application\Queries\CustomerListHandler;
use App\Clean\Application\Queries\CustomerListHandlerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
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
