<?php

namespace App\Http\Requests;

use Clean\Contracts\Customers\Application\Commands\CustomerEdit;
use Illuminate\Foundation\Http\FormRequest;

class CustomerEditRequest extends FormRequest implements CustomerEdit
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }

    public function getId(): string
    {
        return $this->route('id');
    }

    public function getName(): string
    {
        return $this->request->get('name');
    }
}
