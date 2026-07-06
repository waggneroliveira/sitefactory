<?php

namespace App\Services;

// use Spatie\Multitenancy\Models\Tenant;
use App\Models\Tenant;
class ThemeManager
{
    public function current(): string
    {   
        // dd(Tenant::current()?->templateTheme);
        return Tenant::current()?->templateTheme?->slug ?? 'default';
    }

    public function view(string $view): string
    {
        $path = Tenant::current()?->templateTheme?->template_variation;
        return "client.themes.{$this->current()}.{$path}.blades.{$view}";
    }

    public function asset(string $path): string
    {
        return asset("themes/{$this->current()}/{$path}");
    }
}