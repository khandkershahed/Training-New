<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if (Schema::hasTable('settings')) {
            View::share('setting', Setting::first());
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // if (Schema::hasTable('settings')) {
        //     View::share('setting', Setting::first());
        // }
    }
}
