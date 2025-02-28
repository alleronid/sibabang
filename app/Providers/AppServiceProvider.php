<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Anhskohbo\NoCaptcha\NoCaptchaServiceProvider;

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
        //
    }
}
