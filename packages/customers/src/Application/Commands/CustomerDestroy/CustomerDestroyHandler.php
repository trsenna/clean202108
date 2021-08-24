<?php

namespace Clean\Customers\Application\Commands\CustomerDestroy;

use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Customers\Domain\Model\CustomerId;
use Clean\Events\Customers\Application\CustomerDestroyed;

class CustomerDestroyHandler implements CustomerDestroyHandlerInterface
{
    private CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function execute(CustomerDestroy $command): void
    {
        $customerId = CustomerId::factory()->of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerId);

        $this->customerRepository->remove($customer);

        event(new CustomerDestroyed($customer->identity()->value(), $customer->getName()));
    }
}
