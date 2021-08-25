<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerEditRequest;
use Clean\Contracts\Customers\Application\Commands\CustomerEditHandler;

class EditController extends Controller
{
    private CustomerEditHandler $customerEditHandler;

    public function __construct(CustomerEditHandler $customerEditHandler)
    {
        $this->customerEditHandler = $customerEditHandler;
    }

    public function __invoke(CustomerEditRequest $request)
    {
        $response = $this->customerEditHandler->execute($request);

        return response()->json([
            'status' => 'success',
            'data' => $response,
        ]);
    }
}
