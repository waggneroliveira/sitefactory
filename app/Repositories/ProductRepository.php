<?php

namespace App\Repositories;

use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Obtém categorias de produtos em destaque que possuem produtos ativos
     */
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

    /**
     * Obtém todas as categorias de produtos (limitado)
     */
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

    /**
     * Obtém produtos ativos com suas categorias e marcas
     */
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
}