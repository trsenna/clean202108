<?php

namespace Clean\Customers\Application\Commands;

use Clean\Customers\Application\CustomerDestroyed;
use Clean\Customers\Domain\Model\CustomerRepository;
use Clean\Foundation\IdentityFactory;

class CustomerDestroyHandler implements CustomerDestroyHandlerInterface
{
    private CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function execute(CustomerDestroy $command): void
    {
        $customerIdentity = IdentityFactory::of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerIdentity);

        $this->customerRepository->remove($customer);

        event(new CustomerDestroyed($customer->identity()->value(), $customer->getName()));
    }
}
