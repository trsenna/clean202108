<?php

namespace Clean\Customers\Application\Commands;

use Clean\Customers\Application\CustomerStored;
use Clean\Customers\Domain\Model\CustomerFactory;
use Clean\Customers\Domain\Model\CustomerRepository;

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
        $customer = $this->customerFactory->create($customerStore->name);
        // $this->customerRepository->add($customer);

        event(new CustomerStored($customer->identity()->value(), $customer->getName()));

        return new CustomerStoreResponse(
            $customer->identity()->value(),
            $customer->getName()
        );
    }
}
