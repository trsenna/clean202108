<?php

namespace Clean\Customers\Application\Commands;

use Clean\Contracts\Customers\Application\Commands\CustomerDestroy;
use Clean\Contracts\Customers\Application\Commands\CustomerDestroyHandler as CustomerDestroyHandlerContract;
use Clean\Contracts\Customers\Domain\Model\CustomerRepository;
use Clean\Contracts\Events\Application\Dispatcher;
use Clean\Contracts\Foundation\Application\Response;
use Clean\Customers\Domain\Model\CustomerId;
use Clean\Events\Customers\Application\CustomerDestroyed;
use Clean\Foundation\Application\ResponseFactory;

class CustomerDestroyHandler implements CustomerDestroyHandlerContract
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

    public function execute(CustomerDestroy $command): Response
    {
        $customerId = CustomerId::factory()->of($command->id);
        $customer = $this->customerRepository->ofIdentity($customerId);

        $this->customerRepository->remove($customer);

        $this->dispatcher->dispatch(
            new CustomerDestroyed($customer->identity()->value(), $customer->getName())
        );

        return ResponseFactory::none();
    }
}
