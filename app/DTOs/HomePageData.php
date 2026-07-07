<?php

namespace App\DTOs;

class HomePageData
{
    public function __construct(private array $data = []) {}

    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    public function get(string $key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    public function all(): array
    {
        return $this->data;
    }
}