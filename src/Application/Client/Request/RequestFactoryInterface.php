<?php


namespace App\Application\Client\Request;


interface RequestFactoryInterface
{
    public function create(): RequestInterface;
}