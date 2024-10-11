<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\HasRoleAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', HasRoleAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
