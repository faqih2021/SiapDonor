<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/information', function () {
    return view('information');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


Route::get('/table', function () {
    return view('admin.table');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
