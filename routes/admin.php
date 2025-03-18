<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WalletController;
use App\Http\Middleware\IsAdmin;
use App\Models\User;

Route::group(['middleware' => ['auth'], 'prefix' => 'app'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function(){
            Route::get('/', [DashboardController::class, 'admin'])->name('index');
            Route::post('/summary', [DashboardController::class, 'getSummaryData'])->name('summary');
        });
        // Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');

        Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
            Route::get('/', [UserController::class, 'index_admin'])->name('index');
            Route::get('/create', [UserController::class, 'create_admin'])->name('create');
            Route::post('/save', [UserController::class, 'store_admin'])->name('save');
            Route::post('/update', [UserController::class, 'update_admin'])->name('update');
        });

        Route::group(['prefix' => 'company', 'as' => 'company.'], function(){
            Route::get('/', [CompanyController::class, 'index'])->name('index');
            Route::post('/update', [CompanyController::class, 'update'])->name('update');
            Route::get('/show/{id}', [CompanyController::class, 'getCompany'])->name('getCompany');
        });

        Route::group(['prefix' => 'disbursement', 'as' => 'disbursement.'], function(){
            Route::get('/detail/{id}', [WalletController::class, 'getDisbursement'])->name('list');
            Route::post('/update', [WalletController::class, 'processDisbursement'])->name('process');
        });
    });
})->middleware(IsAdmin::class);
