<?php

namespace Clean\Contracts\Events\Application;

interface Dispatcher
{
    public function dispatch(Event $event);
}
