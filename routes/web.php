<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Import the controller

Route::get('/', function () {
    return view('welcome');
});

// Add this route for displaying products
Route::get('/products', [ProductController::class, 'index']);

