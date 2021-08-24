<?php

namespace Clean\Customers\Application\Commands\CustomerEdit;

use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Foundation\Domain\Model\IdentityFactory;
use Clean\Events\Customers\Application\CustomerEdited;

class CustomerEditHandler implements CustomerEditHandlerInterface
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

    public function execute(CustomerEdit $command): CustomerEditResponse
    {
        $customerIdentity = $this->customerIdentityFactory->of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerIdentity);

        $customer->eloquent()->fill([
            'name' => $command->name,
        ]);

        $this->customerRepository->merge($customer);

        event(new CustomerEdited($customer->identity()->value(), $customer->getName()));

        return new CustomerEditResponse(
            $customer->identity()->value(),
            $customer->getName()
        );
    }
}
