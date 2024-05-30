<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('/donation', function () {
    return view('donation');
});
