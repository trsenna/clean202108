<?php

namespace Clean\Customers\Application\Commands\CustomerStore;

use Clean\Contracts\Customers\Domain\Model\CustomerFactory;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Events\Application\Dispatcher;
use Clean\Events\Customers\Application\CustomerStored;

class CustomerStoreHandler implements CustomerStoreHandlerInterface
{
    private CustomerFactory $customerFactory;
    private CustomerRepository $customerRepository;
    private Dispatcher $dispatcher;

    public function __construct(
        CustomerFactory $customerFactory,
        CustomerRepository $customerRepository,
        Dispatcher $dispatcher
    ) {
        $this->customerFactory = $customerFactory;
        $this->customerRepository = $customerRepository;
        $this->dispatcher = $dispatcher;
    }

    public function execute(CustomerStore $customerStore): CustomerStoreResponse
    {
        $customer = $this->customerFactory->create([
            'name' => $customerStore->name
        ]);

        $this->customerRepository->add($customer);

        $this->dispatcher->dispatch(
            new CustomerStored($customer->identity()->value(), $customer->getName())
        );

        return new CustomerStoreResponse(
            $customer->identity()->value(),
            $customer->getName()
        );
    }
}
