<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/login', [LoginController::class, 'login'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('site.authenticate');
Route::get('/registro', [RegisterController::class, 'register'])->name('site.register');
Route::post('/registro', [RegisterController::class, 'store'])->name('auth.register');


//AUTH - Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {

    // Rota para logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

    //Rota que apenas o admin pode acessar
    Route::middleware(['auth', 'can:access-is_admin'])->group(function () {

        // Rota para o dashboard do admin
        Route::get('admin/dashboard', [LoginController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('admin/clientes', [DashboardController::class, 'tables'])->name('admin.tables');
        Route::get('admin/veiculos', [DashboardController::class, 'vehicles'])->name('admin.vehicles');

        Route::get('admin/dashboard/{id}', [DashboardController::class, 'getUser']);
    });
});



