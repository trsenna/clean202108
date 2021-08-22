<?php

namespace Clean\Customers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Event::listen(function (\Clean\Customers\Application\CustomerStored $event) {
            Log::debug("a new customer({$event->id}) stored");
        });

        Event::listen(function (\Clean\Customers\Application\CustomerEdited $event) {
            Log::debug("a existing customer({$event->id}) edited");
        });

        Event::listen(function (\Clean\Customers\Application\CustomerDestroyed $event) {
            Log::debug("a existing customer({$event->id}) destroyed");
        });
    }
}
