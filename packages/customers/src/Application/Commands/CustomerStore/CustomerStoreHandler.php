<?php

namespace Clean\Customers\Application\Commands\CustomerStore;

use Clean\Contracts\Customers\Domain\Model\CustomerFactory;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Events\Customers\Application\CustomerStored;

class CustomerStoreHandler implements CustomerStoreHandlerInterface
{
    private CustomerFactory $customerFactory;
    private CustomerRepository $customerRepository;

    public function __construct(CustomerFactory $customerFactory, CustomerRepository $customerRepository)
    {
        $this->customerFactory = $customerFactory;
        $this->customerRepository = $customerRepository;
    }

    public function execute(CustomerStore $customerStore): CustomerStoreResponse
    {
        $customer = $this->customerFactory->create([
            'name' => $customerStore->name
        ]);

        $this->customerRepository->add($customer);

        event(new CustomerStored($customer->identity()->value(), $customer->getName()));

        return new CustomerStoreResponse(
            $customer->identity()->value(),
            $customer->getName()
        );
    }
}
