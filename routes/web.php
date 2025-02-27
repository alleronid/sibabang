<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register-save', [RegisterController::class, 'store'])->name('register.save');
Route::get('/check-ktp/{ktp}', [RegisterController::class, 'checkKTP']);
Route::get('/check-email/{email}', [RegisterController::class, 'checkEmail']);
