<?php

namespace App\Http\Requests;

use Clean\Contracts\Customers\Application\Commands\CustomerStore;
use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest implements CustomerStore
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }

    public function getId(): string
    {
        return $this->request->get('id');
    }

    public function getName(): string
    {
        return $this->request->get('name');
    }
}
