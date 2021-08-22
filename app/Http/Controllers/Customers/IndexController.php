<?php

namespace App\Http\Controllers\Customers;

use Clean\Customers\Application\Queries\CustomerList;
use Clean\Customers\Application\Queries\CustomerListHandlerInterface;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private CustomerListHandlerInterface $customerListHandler;

    public function __construct(CustomerListHandlerInterface $customerListHandler)
    {
        $this->customerListHandler = $customerListHandler;
    }

    public function __invoke()
    {
        $customerList = new CustomerList();
        $customerListResponse = $this->customerListHandler->execute($customerList);

        return response()->json([
            'status' => 'success',
            'data' => $customerListResponse,
        ]);
    }
}
