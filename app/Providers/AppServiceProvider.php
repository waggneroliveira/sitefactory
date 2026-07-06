<?php

namespace App\Providers;

use Exception;
use App\Models\SettingEmail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use App\Services\ThemeManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ThemeManager::class);
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('pt_BR');
    }
}
