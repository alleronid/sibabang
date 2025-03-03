<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\WalletController;
use App\Models\Merchant;

Route::group(['middleware' => 'auth', 'prefix' => 'app'], function () {
    Route::get('/dashboard', [DashboardController::class, 'merchant'])->name('dashboard.merchant');

    Route::group(['prefix' => 'merchant', 'as' => 'merchant.'], function(){
        Route::get('/', [MerchantController::class, 'index'])->name('index');
        Route::get('/create', [MerchantController::class, 'create'])->name('create');
        Route::post('/save', [MerchantController::class, 'store'])->name('save');
        Route::post('/update', [MerchantController::class, 'update'])->name('update');
        Route::get('/show/{id}', [MerchantController::class, 'getMerchant'])->name('getMerchant');
    });

    Route::group(['prefix' => 'wallet', 'as' => 'wallet.'], function(){
        Route::get('/', [WalletController::class, 'index'])->name('index');
        Route::get('/disbursement', [WalletController::class, 'createDisbursement'])->name('disbursement');
    });

});
