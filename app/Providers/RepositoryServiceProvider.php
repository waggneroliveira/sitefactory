<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Repositories\{
    BlogRepositoryInterface,
    ProductRepositoryInterface,
    AnnouncementRepositoryInterface
};
use App\Repositories\{
    BlogRepository,
    ProductRepository,
    AnnouncementRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(AnnouncementRepositoryInterface::class, AnnouncementRepository::class);
    }
}