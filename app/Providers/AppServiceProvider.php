<?php

namespace App\Providers;

use App\Contracts\Repositories\{ BlogRepositoryInterface, ProductRepositoryInterface, AnnouncementRepositoryInterface };
use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Contracts\Repositories\BrandRepositoryInterface;
use App\Contracts\Repositories\ContactRepositoryInterface;
use App\Models\SettingEmail;
use App\Repositories\AboutRepository;
use App\Repositories\AnnouncementRepository;
use App\Repositories\BlogRepository;
use App\Repositories\BrandRepository;
use App\Repositories\ContactRepository;
use App\Repositories\ProductRepository;
use App\Services\ThemeManager;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;


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
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('pt_BR');
    }
}
