<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/testimonial', [HomeController::class, 'testi'])->name('testimonial');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register-save', [RegisterController::class, 'store'])->name('register.save');
Route::get('/check-ktp/{ktp}', [RegisterController::class, 'checkKTP']);
Route::get('/check-email/{email}', [RegisterController::class, 'checkEmail']);

Route::get('/login', [AuthController::class ,'index'])->name('login');
Route::post('/login-process', [AuthController::class, 'auth'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
