<?php

namespace Clean\Contracts\Foundation\Application\Commands;

interface CommandHandler
{
    public function execute(Command $command): CommandResponse;
}
