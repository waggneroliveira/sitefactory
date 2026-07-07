<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ProductRepositoryInterface
{
    // Home Page
    public function getHighlightCategories(int $limit = 3): Collection;
    public function getAllCategories(int $limit = 4): Collection;
    public function getProducts(int $limit = 16): Collection;
    
    // Product Page
    public function getProductsWithFilters(
        ?string $category = null,
        ?string $brand = null,
        ?string $search = null
    ): Collection;
    
    public function getProductCategories(): Collection;
    public function getBrands(): Collection;
    public function getProductBySlug(string $slug): ?Model;
    public function getProductByCategoryAndSlug(string $category, string $slug): ?Model;
}