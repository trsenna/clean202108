<?php

namespace Clean\Events\Application;

use Clean\Contracts\Events\Application\Dispatcher as ApplicationDispatcher;
use Clean\Contracts\Events\Application\Event;

final class Dispatcher implements ApplicationDispatcher
{
    public function dispatch(Event $event)
    {
        event($event);
    }
}
