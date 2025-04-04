<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// ga bisa diakses sama merchant.app.com & backoffice.app.com
Route::group(['middleware' => 'LandingPage'], function () {
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
});

// ga bisa diakses sama app.com handle di webserver
Route::get('/login_backoffice', [AuthController::class ,'index_backoffice'])->name('login_backoffice');
Route::post('/login_backoffice-process', [AuthController::class, 'auth_backoffice'])->name('login_backoffice.process');

Route::get('/login', [AuthController::class ,'index'])->name('login');
Route::post('/login_process', [AuthController::class, 'auth'])->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
