<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


Route::prefix('/admin-panel')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});
