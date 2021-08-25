<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use Clean\Contracts\Customers\Application\Commands\CustomerStoreHandler;

class StoreController extends Controller
{
    private CustomerStoreHandler $customerStoreHandler;

    public function __construct(CustomerStoreHandler $customerStoreHandler)
    {
        $this->customerStoreHandler = $customerStoreHandler;
    }

    public function __invoke(CustomerStoreRequest $request)
    {
        $response = $this->customerStoreHandler->execute($request);

        return response()->json([
            'status' => 'success',
            'data' => $response,
        ]);
    }
}
