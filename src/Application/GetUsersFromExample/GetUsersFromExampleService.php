<?php


namespace App\Application\GetUsersFromExample;


use App\Application\Client\ClientInterface;
use App\Application\Client\Request\RequestFactoryInterface;

class GetUsersFromExampleService implements GetUsersFromExampleInterface
{
    protected $requestFactory;

    protected $client;

    public function __construct(RequestFactoryInterface $requestFactory, ClientInterface $client)
    {
        $this->requestFactory = $requestFactory;
        $this->client = $client;
    }

    public function start(): void
    {
        $request = $this->requestFactory->create();
        $request->setPayload('This is payload');
        $this->client->process($request);
    }
}