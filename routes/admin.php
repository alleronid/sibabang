<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::group(['middleware' => 'auth', 'prefix' => 'app'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
            Route::get('/', [UserController::class, 'index_admin'])->name('index');
            Route::get('/create', [UserController::class, 'create_admin'])->name('create');
            Route::post('/save', [UserController::class, 'store_admin'])->name('save');
            Route::post('/update', [UserController::class, 'update_admin'])->name('update');
        });
    });
});
