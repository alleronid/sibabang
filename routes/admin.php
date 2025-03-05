<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::group(['middleware' => 'auth', 'prefix' => 'app'], function () {
    Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/save', [UserController::class, 'store'])->name('save');
        Route::post('/update', [UserController::class, 'update'])->name('update');
        Route::get('/show/{id}', [UserController::class, 'getUser'])->name('getUser');
    });
});
