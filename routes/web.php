<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);
Route::get('/login', [SiteController::class, 'login'])->name('site.login');
Route::get('/registro', [SiteController::class, 'register'])->name('site.register');
