<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
    public function getHighlightCategories(int $limit = 3): Collection;
    public function getAllCategories(int $limit = 4): Collection;
    public function getProducts(int $limit = 16): Collection;
}