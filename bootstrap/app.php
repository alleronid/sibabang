<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\LandingPage;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        function(Router $router){
            $router->middleware('web')->group(base_path('routes/web.php'));
            $router->middleware('web')->group(base_path('routes/app.php'));
            $router->middleware('web')->group(base_path('routes/admin.php'));
        },
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \RealRashid\SweetAlert\ToSweetAlert::class,
        ]);
        $middleware->alias([
            'IsAdmin' => \App\Http\Middleware\IsAdmin::class,
            'NotLandingPage' => \App\Http\Middleware\Authenticate::class,
            'LandingPage' => \App\Http\Middleware\LandingPage::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
