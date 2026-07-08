<?php

namespace App\Repositories;

use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ProductRepositoryInterface
{
    // ============== HOME PAGE ==============
    
    public function getHighlightCategories(int $limit = 3): Collection
    {
        return ProductCategory::whereHas('products', function($query) {
                $query->active()->whereHas('brand', fn($q) => $q->active());
            })
            ->where('highlight', 1)
            ->active()      
            ->sorting()    
            ->limit($limit) 
            ->get();
    }

    public function getAllCategories(int $limit = 4): Collection
    {
        return ProductCategory::whereHas('products', function($query) {
                $query->active()->whereHas('brand', fn($q) => $q->active());
            })
            ->active()
            ->sorting()
            ->limit($limit) 
            ->get();
    }

    public function getProducts(int $limit = 16): Collection
    {
        return Product::whereHas('category', function($query) {
                $query->active();
            })
            ->whereHas('brand', function($query) {
                $query->active();
            })
            ->active()
            ->sorting()
            ->limit($limit)
            ->get();
    }

    // ============== PRODUCT PAGE ==============

    public function getProductsWithFilters(
        ?string $category = null,
        ?string $brand = null,
        ?string $search = null
    ): Collection {
        return Product::with(['category', 'brand'])
            ->whereHas('category', fn($q) => $q->active())
            ->whereHas('brand', fn($q) => $q->active())
            ->when($category && $category !== 'all', fn($query) => 
                $query->whereHas('category', fn($q) => $q->where('slug', $category)->active())
            )
            ->when($brand && $brand !== 'all', fn($query) => 
                $query->whereHas('brand', fn($q) => $q->where('slug', $brand)->active())
            )
            ->when($search, fn($query) => 
                $query->where(fn($q) => 
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                )
            )
            ->active()
            ->sorting()
            ->get();
    }

    public function getProductCategories(): Collection
    {
        return ProductCategory::whereHas('products', function($query) {
                $query->active()->whereHas('brand', fn($q) => $q->active());
            })
            ->active()
            ->sorting()
            ->get();
    }

    public function getBrands(): Collection
    {
        return Brand::whereHas('products', function($query) {
                $query->active()->whereHas('category', fn($q) => $q->active());
            })
            ->active()
            ->sorting()
            ->get();
    }

    public function getProductBySlug(string $slug): ?Model
    {
        return Product::with(['category', 'brand', 'galleries' => fn($q) => $q->active()->sorting()])
            ->whereHas('category', fn($q) => $q->active())
            ->whereHas('brand', fn($q) => $q->active())
            ->where('slug', $slug)
            ->active()
            ->first();
    }

    public function getProductByCategoryAndSlug(string $category, string $slug): ?Model
    {
        return Product::with(['category', 'brand', 'galleries' => fn($q) => $q->active()->sorting()])
            ->whereHas('category', fn($q) => $q->where('slug', $category)->active())
            ->whereHas('brand', fn($q) => $q->active())
            ->where('slug', $slug)
            ->active()
            ->first();
    }
}