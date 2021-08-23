<?php

namespace Clean\Customers\Application\Commands\CustomerEdit;

use Clean\Customers\Application\CustomerEdited;
use Clean\Customers\Domain\Model\CustomerRepository;
use Clean\Foundation\IdentityFactory;

class CustomerEditHandler implements CustomerEditHandlerInterface
{
    private CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function execute(CustomerEdit $command): CustomerEditResponse
    {
        $customerIdentity = IdentityFactory::of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerIdentity);

        $customer->name = $command->name;
        $this->customerRepository->merge($customer);

        event(new CustomerEdited($customer->identity()->value(), $customer->getName()));

        return new CustomerEditResponse(
            $customer->identity()->value(),
            $customer->getName()
        );
    }
}
