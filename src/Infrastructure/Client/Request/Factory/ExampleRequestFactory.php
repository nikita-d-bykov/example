<?php


namespace App\Infrastructure\Client\Request;


use App\Application\Client\Request\RequestFactoryInterface;
use App\Application\Client\Request\RequestInterface;

class ExampleRequestFactory implements RequestFactoryInterface
{
    public function create(): RequestInterface
    {
        return new ExampleRequest();
    }
}