<?php

namespace App\Services;

// use Spatie\Multitenancy\Models\Tenant;
use App\Models\Tenant;
class ThemeManager
{
    public function current(): string
    {   
        dd(Tenant::current()?->templateTheme);
        return Tenant::current()?->templateTheme?->slug ?? 'default';
    }

    public function view(string $view): string
    {
        return "client.themes.{$this->current()}.tp-01.blades.{$view}";
    }

    public function asset(string $path): string
    {
        return asset("themes/{$this->current()}/{$path}");
    }
}