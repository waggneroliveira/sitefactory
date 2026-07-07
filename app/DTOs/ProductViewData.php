<?php

namespace App\DTOs;

class ProductViewData
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
    public function hasProduct(): bool
    {
        return isset($this->data['product']) && !is_null($this->data['product']);
    }

    public function hasError(): bool
    {
        return isset($this->data['error']);
    }

    public function getError(): ?string
    {
        return $this->data['error'] ?? null;
    }

    public function getProductName(): ?string
    {
        return $this->hasProduct() ? $this->product->title : null;
    }

    public function hasGallery(): bool
    {
        return $this->hasProduct() && isset($this->product->galleries) && $this->product->galleries->isNotEmpty();
    }
}