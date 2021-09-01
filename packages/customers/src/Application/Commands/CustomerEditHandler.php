<?php

namespace Clean\Customers\Application\Commands;

use Clean\Contracts\Customers\Application\Commands\CustomerEdit;
use Clean\Contracts\Customers\Application\Commands\CustomerEditHandler as CustomerEditHandlerContract;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Events\Application\Dispatcher;
use Clean\Contracts\Foundation\Application\Response;
use Clean\Customers\Domain\Model\CustomerId;
use Clean\Events\Customers\Application\CustomerEdited;
use Clean\Foundation\Application\ResponseFactory;

class CustomerEditHandler implements CustomerEditHandlerContract
{
    private CustomerRepository $customerRepository;
    private Dispatcher $dispatcher;

    public function __construct(
        CustomerRepository $customerRepository,
        Dispatcher $dispatcher
    ) {
        $this->customerRepository = $customerRepository;
        $this->dispatcher = $dispatcher;
    }

    public function execute(CustomerEdit $command): Response
    {
        $customerId = CustomerId::factory()->of($command->getId());
        $customer = $this->customerRepository->ofIdentity($customerId);

        $customer->eloquent()->fill([
            'name' => $command->getName(),
        ]);

        $this->customerRepository->merge($customer);

        $this->dispatcher->dispatch(
            new CustomerEdited($customer->identity()->value(), $customer->getName())
        );

        return ResponseFactory::asObject([
            'id' => $customer->identity()->value(),
            'name' => $customer->getName(),
        ]);
    }
}
