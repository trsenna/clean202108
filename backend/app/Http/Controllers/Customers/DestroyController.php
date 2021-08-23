<?php

namespace App\Http\Controllers\Customers;

use Clean\Customers\Application\Commands\CustomerDestroy\CustomerDestroy;
use Clean\Customers\Application\Commands\CustomerDestroy\CustomerDestroyHandlerInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    private CustomerDestroyHandlerInterface $customerDestroyHandler;

    public function __construct(CustomerDestroyHandlerInterface $customerDestroyHandler)
    {
        $this->customerDestroyHandler = $customerDestroyHandler;
    }

    public function __invoke(string $id)
    {
        $customerDestroy = new CustomerDestroy($id);
        $this->customerDestroyHandler->execute($customerDestroy);

        return response()->json([
            'status' => 'success',
            'data' => null,
        ]);
    }
}
