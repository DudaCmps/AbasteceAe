<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [SiteController::class, 'login'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('site.authenticate');

Route::get('/registro', [SiteController::class, 'register'])->name('site.register');
