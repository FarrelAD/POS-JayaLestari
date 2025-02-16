<?php

use App\Http\Controllers\POSController;
use Illuminate\Support\Facades\Route;

/**
 * Home page
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * The implementation of route prefix
 * Product pages
 */
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', function () {
        return "Food beverage";
    });
    Route::get('/beauty-health', function () {
        return "Beauty health";
    });
    Route::get('/home-care', function () {
        return "Home care!";
    });
    Route::get('/baby-kid', function () {
        return "Baby kid";
    });
});

/**
 * The implementation of route params
 * User pages
 */
Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return "Hello $name! You have ID $id isn't it ?";
});


/**
 * Transaction pages
 */
Route::resource('pos', POSController::class);
