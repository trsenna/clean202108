<?php

namespace Clean\Customers\Application\Commands;

use Clean\Contracts\Customers\Application\Commands\CustomerStore;
use Clean\Contracts\Customers\Application\Commands\CustomerStoreHandler as CustomerStoreHandlerContract;
use Clean\Contracts\Customers\Domain\Model\CustomerFactory;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Events\Application\Dispatcher;
use Clean\Events\Customers\Application\CustomerStored;
use stdClass;

class CustomerStoreHandler implements CustomerStoreHandlerContract
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

    public function execute(CustomerStore $command): stdClass
    {
        $customer = $this->customerFactory->create([
            'name' => $command->getName(),
        ]);

        $this->customerRepository->add($customer);

        $this->dispatcher->dispatch(
            new CustomerStored($customer->identity()->value(), $customer->getName())
        );

        $response = new stdClass;
        $response->id = $customer->identity()->value();
        $response->name = $customer->getName();

        return $response;
    }
}
