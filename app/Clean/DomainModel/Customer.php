<?php

namespace App\Clean\DomainModel;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function __construct(CustomerId $customerId)
    {
        $this->id = $customerId->identity;
    }
}
