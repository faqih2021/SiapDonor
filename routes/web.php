<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;

// Authentication routes
Auth::routes();

// Home route
Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('exportPdf', [TableController::class, 'exportPdf'])->name('table.exportPdf');
});

// Other routes
Route::get('/information', function () {
    return view('information');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/table', function () {
    return view('admin.table');
});




Route::get('/', [HomeController::class, 'index'])->name('home');
