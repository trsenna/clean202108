<?php

namespace Clean\Customers\Application\Commands\CustomerDestroy;

use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Foundation\Domain\Model\IdentityFactory;
use Clean\Events\Customers\Application\CustomerDestroyed;

class CustomerDestroyHandler implements CustomerDestroyHandlerInterface
{
    private IdentityFactory $customerIdentityFactory;
    private CustomerRepository $customerRepository;

    public function __construct(
        IdentityFactory $customerIdentityFactory,
        CustomerRepository $customerRepository
    ) {
        $this->customerIdentityFactory = $customerIdentityFactory;
        $this->customerRepository = $customerRepository;
    }

    public function execute(CustomerDestroy $command): void
    {
        $customerIdentity = $this->customerIdentityFactory->of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerIdentity);

        $this->customerRepository->remove($customer);

        event(new CustomerDestroyed($customer->identity()->value(), $customer->getName()));
    }
}
