<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Dokter\DashboardController as DokterDashboard;
use App\Http\Controllers\User\DashboardController as UserDashboard;

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
    });


Route::prefix('dokter')
    ->name('dokter.')
    ->middleware(['auth', 'role:dokter'])
    ->group(function () {
        Route::get('/', [DokterDashboard::class, 'index'])->name('dashboard');
    });



Route::prefix('user')
    ->name('user.')
    ->middleware(['auth', 'role:user'])
    ->group(function () {
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    });
