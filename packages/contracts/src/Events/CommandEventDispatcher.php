<?php

namespace Clean\Contracts\Events;

interface CommandEventDispatcher
{
    public function dispatch(CommandEvent $commandEvent);
}
