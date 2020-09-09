<?php


namespace App\Infrastructure\Client\Request;


class AbstractRequest
{
    protected $parameters = [];

    protected $headers = [];

    protected $payload = null;

    public function setParameters(array $parameters): void
    {
        $this->headers = array_merge($this->parameters, $parameters);
    }

    public function setHeaders(array $headers): void
    {
        $this->headers = array_merge($this->headers, $headers);
    }

    public function setPayload(string $payload): void
    {
        $this->payload = $payload;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function getHeaders(): array
    {
        return $this->getHeaders();
    }

    public function getPayload(): ?string
    {
        return $this->payload;
    }
}