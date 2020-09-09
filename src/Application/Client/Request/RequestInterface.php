<?php


namespace App\Application\Client\Request;


interface RequestInterface
{
    public function setParameters(array $parameters): void;

    public function setHeaders(array $headers): void;

    public function setPayload(string $payload): void;

    public function getParameters(): array;

    public function getHeaders(): array;

    public function getPayload(): ?string;

    public function getMethod(): string;

    public function getUrl(): string;
}