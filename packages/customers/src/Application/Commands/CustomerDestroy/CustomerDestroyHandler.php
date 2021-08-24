<?php

namespace Clean\Customers\Application\Commands\CustomerDestroy;

use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Events\Application\Dispatcher;
use Clean\Customers\Domain\Model\CustomerId;
use Clean\Events\Customers\Application\CustomerDestroyed;

class CustomerDestroyHandler implements CustomerDestroyHandlerInterface
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

    public function execute(CustomerDestroy $command): void
    {
        $customerId = CustomerId::factory()->of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerId);

        $this->customerRepository->remove($customer);

        $this->dispatcher->dispatch(
            new CustomerDestroyed($customer->identity()->value(), $customer->getName())
        );
    }
}
