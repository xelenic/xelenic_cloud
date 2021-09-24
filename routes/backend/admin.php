<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Backend\FileManagerController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('products', [ProductsController::class, 'index'])->name('products');
Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
Route::get('products/delete', [ProductsController::class, 'delete'])->name('products.delete');
Route::get('products/DataDetails', [ProductsController::class, 'DataDetails'])->name('products.dataDetails');

Route::get('files_manager', [FileManagerController::class, 'index'])->name('files_manager');
