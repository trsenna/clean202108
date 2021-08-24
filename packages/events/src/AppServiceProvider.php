<?php

namespace Clean\Events;

use Clean\Contracts\Events\Application\Dispatcher as DispatcherContract;
use Clean\Events\Application\Dispatcher;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(DispatcherContract::class, Dispatcher::class);
    }
}
