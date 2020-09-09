<?php


namespace App\Application\Client;


use App\Application\Client\Request\RequestInterface;
use App\Application\Client\Response\ResponseDto;

interface ClientInterface
{
    public function process(RequestInterface $request): ResponseDto;
}