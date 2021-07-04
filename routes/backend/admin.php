<?php

use App\Http\Controllers\Backend\DashboardController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('products', [DashboardController::class, 'index'])->name('products');
Route::get('products/create', [DashboardController::class, 'create'])->name('products.create');
Route::get('products/delete', [DashboardController::class, 'delete'])->name('products.delete');
