<?php

namespace App\Http\Requests;

use Clean\Contracts\Customers\Application\Commands\CustomerDestroy;
use Illuminate\Foundation\Http\FormRequest;

class CustomerDestroyRequest extends FormRequest implements CustomerDestroy
{
    public function rules()
    {
        return [];
    }

    public function getId(): string
    {
        return $this->route('id');
    }
}
