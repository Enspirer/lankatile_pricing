<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PriceController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('price', [PriceController::class, 'index'])->name('price.index');
Route::post('price/store', [PriceController::class, 'store'])->name('price.store');
Route::get('price/getdetails', [PriceController::class, 'getdetails'])->name('price.getdetails');
Route::get('price/edit/{id}', [PriceController::class, 'edit'])->name('price.edit');
Route::post('price/update', [PriceController::class, 'update'])->name('price.update');
Route::get('price/delete/{id}', [PriceController::class, 'destroy'])->name('price.destroy');

