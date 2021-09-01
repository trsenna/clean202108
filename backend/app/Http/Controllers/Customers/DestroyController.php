<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerDestroyRequest;
use Clean\Contracts\Customers\Application\Commands\CustomerDestroyHandler;

class DestroyController extends Controller
{
    private CustomerDestroyHandler $customerDestroyHandler;

    public function __construct(CustomerDestroyHandler $customerDestroyHandler)
    {
        $this->customerDestroyHandler = $customerDestroyHandler;
    }

    public function __invoke(CustomerDestroyRequest $request)
    {
        $response = $this->customerDestroyHandler->execute($request);

        return response()->json([
            'status' => 'success',
            'data' => $response->data(),
        ]);
    }
}
