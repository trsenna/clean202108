<?php

namespace App\Http\Controllers\Customers;

use App\Clean\Application\Commands\CustomerStore;
use App\Clean\Application\Commands\CustomerStoreHandlerInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    private CustomerStoreHandlerInterface $customerStoreHandler;

    public function __construct(CustomerStoreHandlerInterface $customerStoreHandler)
    {
        $this->customerStoreHandler = $customerStoreHandler;
    }

    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $customerStore = new CustomerStore($validated['name']);
        $customerStoreResponse = $this->customerStoreHandler->execute($customerStore);

        return response()->json([
            'status' => 'success',
            'data' => $customerStoreResponse,
        ]);
    }
}
