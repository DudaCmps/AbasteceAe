<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('site.authenticate');

Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/registro', [RegisterController::class, 'register'])->name('site.register');
