<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface BrandRepositoryInterface
{
    public function getActiveBrands(): Collection;
    public function getBrandBySlug(string $slug): ?object;
    public function getBrandsWithProducts(): Collection;
}