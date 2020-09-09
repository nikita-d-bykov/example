<?php


namespace App\Infrastructure\Client;

use App\Application\Client\ClientInterface;
use App\Application\Client\Request\RequestInterface;
use App\Application\Client\Response\ResponseDto;

class Client implements ClientInterface
{

    public function process(RequestInterface $request): ResponseDto
    {
        return new ResponseDto();
    }
}