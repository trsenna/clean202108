<?php

namespace Clean\Customers\Application\Commands\CustomerEdit;

use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Events\Application\Dispatcher;
use Clean\Customers\Domain\Model\CustomerId;
use Clean\Events\Customers\Application\CustomerEdited;

class CustomerEditHandler implements CustomerEditHandlerInterface
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

    public function execute(CustomerEdit $command): CustomerEditResponse
    {
        $customerId = CustomerId::factory()->of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerId);

        $customer->eloquent()->fill([
            'name' => $command->name,
        ]);

        $this->customerRepository->merge($customer);

        $this->dispatcher->dispatch(
            new CustomerEdited($customer->identity()->value(), $customer->getName())
        );

        return new CustomerEditResponse(
            $customer->identity()->value(),
            $customer->getName()
        );
    }
}
