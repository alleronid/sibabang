<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MerchantBankController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\MerchantPaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;

Route::group(['middleware' => 'auth', 'prefix' => 'app'], function () {
    Route::get('/dashboard', [DashboardController::class, 'merchant'])->name('dashboard');
    Route::get('/detail-wallet/{mId}', [DashboardController::class, 'getDetailWallet'])->name('dashboard.wallet');

    Route::group(['prefix'=> 'company', 'as' => 'company.'], function(){
        Route::get('/', [CompanyController::class, 'index_profile'])->name('index');
        Route::post('/update-personal', [CompanyController::class, 'personalData'])->name('update.personal');
        Route::post('/update-company', [CompanyController::class, 'companyData'])->name('update.company');
        Route::get('/get-kota/{id}', [CompanyController::class, 'getCity'])->name('get.city');
        Route::get('/get-kecamatan/{id}', [CompanyController::class, 'getDistrict'])->name('get.district');
        Route::get('/get-kelurahan/{id}', [CompanyController::class, 'getSubdistrict'])->name('get.subdistrict');
    });

    Route::group(['prefix' => 'transaction', 'as' => 'transaction.'], function(){
        Route::get('/', [TransactionController::class, 'index'])->name('index');
        Route::get('/create', [TransactionController::class, 'create'])->name('create');
        Route::get('/detail/{trxId}', [TransactionController::class, 'detail'])->name('detail');
        Route::post('/store', [TransactionController::class, 'store'])->name('save');
    });

    Route::group(['prefix' => 'merchant', 'as' => 'merchant.'], function(){
        Route::get('/', [MerchantController::class, 'index'])->name('index');
        Route::get('/create', [MerchantController::class, 'create'])->name('create');
        Route::post('/save', [MerchantController::class, 'store'])->name('save');
        Route::post('/update', [MerchantController::class, 'update'])->name('update');
        Route::get('/show/{id}', [MerchantController::class, 'getMerchant'])->name('getMerchant');
        Route::get('/list-payment', [MerchantPaymentController::class, 'qris'])->name('qris');
    });

    Route::group(['prefix' => 'merchant-bank', 'as' => 'merchant-bank.'], function(){
        Route::get('/', [MerchantBankController::class, 'index'])->name('index');
        Route::get('/create', [MerchantBankController::class, 'create'])->name('create');
        Route::get('/edit/{idHash}', [MerchantBankController::class, 'edit'])->name('edit');
        Route::post('/update', [MerchantBankController::class, 'update'])->name('update');
        Route::get('/detail', [MerchantBankController::class, 'getDetail'])->name('detail');
        Route::post('/store', [MerchantBankController::class, 'store'])->name('save');
        Route::get('/get-bank/{id}', [MerchantBankController::class, 'getBank'])->name('get.bank');
    });

    Route::group(['prefix' => 'wallet', 'as' => 'wallet.'], function(){
        Route::get('/', [WalletController::class, 'index'])->name('index');
        Route::get('/disbursement/{id_hash}', [WalletController::class, 'createDisbursement'])->name('disbursement');
        Route::post('/create-disbursement', [WalletController::class, 'saveDisbursement'])->name('store.disbursement');
        Route::get('report-disbursement', [WalletController::class, 'listDisbursement'])->name('list.disbursement');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('save');
        Route::get('/edit/{idHash}', [UserController::class, 'edit'])->name('edit');
        Route::post('/update', [UserController::class, 'update'])->name('update');
        Route::get('/show/{id}', [UserController::class, 'getUser'])->name('getUser');
    });

});
