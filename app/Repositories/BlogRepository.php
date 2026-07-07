<?php

namespace App\Repositories;

use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Collection;

class BlogRepository implements BlogRepositoryInterface
{
    public function getSuperHighlights(): Collection
    {
        return Blog::whereHas('category', fn($q) => $q->where('active', 1))
            ->superHighlightOnly()
            ->active()
            ->sorting()
            ->limit(6)
            ->get();
    }

    public function getHighlights(): Collection
    {
        return Blog::whereHas('category', fn($q) => $q->where('active', 1))
            ->highlightOnly()
            ->active()
            ->sorting()
            ->limit(4)
            ->get();
    }

    public function getLatestNews(int $limit = 10): Collection
    {
        return Blog::whereHas('category', fn($q) => $q->where('active', 1))
            ->with(['category' => fn($q) => $q->select('id', 'title', 'slug')])
            ->orderBy('created_at', 'DESC')
            ->active()
            ->limit($limit)
            ->get();
    }

    public function getRelatedNews(array $excludedIds, int $limit = 10): Collection
    {
        return Blog::whereHas('category')
            ->whereNotIn('blog_category_id', $excludedIds)
            ->active()
            ->sorting()
            ->take($limit)
            ->get();
    }

    public function getCategoryNews(int $categoryId, int $limit = 10): Collection
    {
        return Blog::whereHas('category', fn($q) => $q->where('id', $categoryId)->where('active', 1))
            ->with(['category' => fn($q) => $q->select('id', 'title', 'slug')])
            ->orderBy('created_at', 'DESC')
            ->active()
            ->limit($limit)
            ->get();
    }

    public function filterByCategory(?string $categorySlug = null): Collection
    {
        $query = Blog::whereHas('category', fn($q) => $q->where('active', 1))
            ->with(['category'])
            ->active();

        if ($categorySlug && $categorySlug !== 'todas') {
            $query->whereHas('category', fn($q) => $q->where('slug', $categorySlug));
        }

        return $query->orderBy('created_at', 'DESC')->get();
    }
}