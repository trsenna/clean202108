<?php

namespace Clean\Contracts\Foundation\Persistence;

use Illuminate\Database\Eloquent\Model;

interface Entity
{
    public function setIdentity(Identity $identity): void;
    public function identity(): Identity;
    public function eloquent(): Model;
}
