<?php

namespace App\DTOs;

class AboutPageData
{
    private array $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

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

    public function toArray(): array
    {
        return $this->data;
    }

    // Métodos específicos para facilitar o acesso
    public function hasAbout(): bool
    {
        return !is_null($this->data['about'] ?? null);
    }

    public function hasPartners(): bool
    {
        return isset($this->data['partners']) && $this->data['partners']->isNotEmpty();
    }

    public function hasReports(): bool
    {
        return isset($this->data['reports']) && $this->data['reports']->isNotEmpty();
    }
}