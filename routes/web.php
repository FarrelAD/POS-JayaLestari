<?php

use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/**
 * Home page
 */
Route::view('/', 'dashboard')
    ->name('dashboard');

/**
 * The implementation of route prefix
 * Product pages
 */
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'showFoodBeverage'])
        ->name('food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'showBeautyHealth'])
        ->name('beauty-health');
    Route::get('/home-care', [ProductController::class, 'showHomeCare'])
        ->name('home-care');
    Route::get('/baby-kid', [ProductController::class, 'showBabyKid'])
        ->name('baby-kid');
});


/**
 * The implementation of route params
 * User pages
 */
Route::get('/users', [UserController::class, 'showAllUsers'])
    ->name('users');
Route::get('/user/{id}/name/{name}', [UserController::class, 'showUserDetail']);


/**
 * Transaction pages
 */
Route::resource('pos', POSController::class);
