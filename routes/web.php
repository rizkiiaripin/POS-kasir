<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/cashier', function () {
    return view('cashier');
});
Route::resource('products', ProductController::class)->except(['show']);
