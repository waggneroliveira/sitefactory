<?php

namespace App\DTOs;

class BlogInnerPageData
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
    public function hasBlog(): bool
    {
        return isset($this->data['blogInner']) && !is_null($this->data['blogInner']);
    }

    public function hasError(): bool
    {
        return isset($this->data['error']);
    }

    public function getError(): ?string
    {
        return $this->data['error'] ?? null;
    }

    public function hasRelatedPosts(): bool
    {
        return isset($this->data['blogRelacionados']) && $this->data['blogRelacionados']->isNotEmpty();
    }

    public function getBlogTitle(): ?string
    {
        return $this->hasBlog() ? $this->blogInner->title : null;
    }
}