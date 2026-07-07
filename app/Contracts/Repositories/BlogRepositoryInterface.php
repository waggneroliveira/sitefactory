<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface BlogRepositoryInterface
{
    // Home Page
    public function getSuperHighlights(): Collection;
    public function getHighlights(): Collection;
    public function getLatestNews(int $limit = 10): Collection;
    public function getRelatedNews(array $excludedIds, int $limit = 10): Collection;
    public function getCategoryNews(int $categoryId, int $limit = 10): Collection;
    public function filterByCategory(?string $categorySlug = null): Collection;
    
    // Blog Page
    public function getBlogCategories(): Collection;
    public function getBlogAll(?string $category = null, ?string $search = null, int $perPage = 15): LengthAwarePaginator;
    public function getBlogSeeAlso(array $excludedIds, int $limit = 4): Collection;
    public function getBlogBySlug(string $slug): ?object;
    public function getBlogRelated(int $categoryId, int $blogId, int $limit = 4): Collection;
    public function getViewMores(int $categoryId, int $limit = 10): Collection;
}