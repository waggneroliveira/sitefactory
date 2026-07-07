<?php

namespace App\DTOs;

class BlogPageData
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

    // Métodos específicos
    public function hasPosts(): bool
    {
        return isset($this->data['blogAll']) && $this->data['blogAll']->isNotEmpty();
    }

    public function getTotalPosts(): int
    {
        return isset($this->data['blogAll']) ? $this->data['blogAll']->total() : 0;
    }

    public function getCurrentCategory(): ?string
    {
        // Pega a categoria atual da URL se existir
        return request()->route('category') ?? null;
    }
}