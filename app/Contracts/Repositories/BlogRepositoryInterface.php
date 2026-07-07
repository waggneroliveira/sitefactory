<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface BlogRepositoryInterface
{
    public function getSuperHighlights(): Collection;
    public function getHighlights(): Collection;
    public function getLatestNews(int $limit = 10): Collection;
    public function getRelatedNews(array $excludedIds, int $limit = 10): Collection;
    public function getCategoryNews(int $categoryId, int $limit = 10): Collection;
    public function filterByCategory(?string $categorySlug = null): Collection;
}