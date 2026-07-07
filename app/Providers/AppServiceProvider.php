<?php

namespace App\Providers;

use Exception;
use App\Models\SettingEmail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use App\Services\ThemeManager;
use App\Contracts\Repositories\{
    BlogRepositoryInterface,
    ProductRepositoryInterface,
    AnnouncementRepositoryInterface
};
use App\Repositories\BlogRepository;
use App\Repositories\ProductRepository;
use App\Repositories\AnnouncementRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ThemeManager::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(AnnouncementRepositoryInterface::class, AnnouncementRepository::class);
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('pt_BR');
    }
}
