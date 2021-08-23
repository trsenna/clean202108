<?php

namespace App\Http\Controllers\Customers;

use Clean\Customers\Application\Commands\CustomerEdit\CustomerEdit;
use Clean\Customers\Application\Commands\CustomerEdit\CustomerEditHandlerInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    private CustomerEditHandlerInterface $customerEditHandler;

    public function __construct(CustomerEditHandlerInterface $customerEditHandler)
    {
        $this->customerEditHandler = $customerEditHandler;
    }

    public function __invoke(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $customerEdit = new CustomerEdit($id, $validated['name']);
        $customerEditResponse = $this->customerEditHandler->execute($customerEdit);

        return response()->json([
            'status' => 'success',
            'data' => $customerEditResponse,
        ]);
    }
}
