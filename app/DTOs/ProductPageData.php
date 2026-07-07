<?php

namespace App\DTOs;

use Illuminate\Database\Eloquent\Collection;

class ProductPageData
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
    public function hasProducts(): bool
    {
        return isset($this->data['products']) && $this->data['products']->isNotEmpty();
    }

    public function getProductCount(): int
    {
        return isset($this->data['products']) ? $this->data['products']->count() : 0;
    }

    public function hasCategories(): bool
    {
        return isset($this->data['productCategories']) && $this->data['productCategories']->isNotEmpty();
    }

    public function hasBrands(): bool
    {
        return isset($this->data['brands']) && $this->data['brands']->isNotEmpty();
    }

    public function getTitle(): string
    {
        return $this->data['title'] ?? 'Todos os Produtos';
    }

    public function getActiveFilters(): array
    {
        return [
            'category' => $this->data['activeCategory'] ?? null,
            'brand' => $this->data['activeBrand'] ?? null,
        ];
    }
}