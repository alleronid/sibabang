<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Anhskohbo\NoCaptcha\NoCaptchaServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(NoCaptchaServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
