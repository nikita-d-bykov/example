<?php

namespace App\Infrastructure\Client\Request;

use \App\Application\Client\Request\RequestInterface;

class ExampleRequest extends AbstractRequest implements RequestInterface
{
    const URL = '/api/v1/test-api';
    const METHOD = 'POST';

    public function getMethod(): string
    {
        return self::METHOD;
    }

    public function getUrl(): string
    {
        return self::URL;
    }
}