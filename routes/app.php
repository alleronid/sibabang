<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MerchantController;
use App\Models\Merchant;

Route::group(['middleware' => 'auth', 'prefix' => 'app'], function () {
    Route::get('/dashboard', [DashboardController::class, 'merchant'])->name('dashboard.merchant');

    Route::group(['prefix' => 'merchant', 'as' => 'merchant.'], function(){
        Route::get('/', [MerchantController::class, 'index'])->name('index');
        Route::get('/create', [MerchantController::class, 'create'])->name('create');
        Route::post('/save', [MerchantController::class, 'store'])->name('save');
        Route::post('/get-merchant', [MerchantController::class, 'getMerchant'])->name('getMerchant');
    });

});
