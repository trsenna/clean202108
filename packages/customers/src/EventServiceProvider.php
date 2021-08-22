<?php

namespace Clean\Customers;

use Clean\Customers\Application\CustomerStored;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Event::listen(function (CustomerStored $event) {
            Log::debug('a new customer stored');
        });
    }
}
