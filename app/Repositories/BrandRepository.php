<?php

namespace App\Repositories;

use App\Contracts\Repositories\BrandRepositoryInterface;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

class BrandRepository implements BrandRepositoryInterface
{
    public function getActiveBrands(): Collection
    {
        return Brand::active()->sorting()->get();
    }

    public function getBrandBySlug(string $slug): ?object
    {
        return Brand::active()->where('slug', $slug)->first();
    }

    public function getBrandsWithProducts(): Collection
    {
        return Brand::whereHas('products', function($query) {
                $query->active()->whereHas('category', fn($q) => $q->active());
            })
            ->active()
            ->sorting()
            ->get();
    }
}