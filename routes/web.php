<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('users', AdminUserController::class);
    Route::post('/users/{user}/restore', [AdminUserController::class, 'restore'])->name('users.restore');

    Route::resource('categories', CategoryController::class);
    Route::post('/categories/{category}/restore', [CategoryController::class, 'restore'])->name('categories.restore');

    Route::resource('products', AdminProductController::class);
    Route::post('/products/{product}/restore', [AdminProductController::class, 'restore'])->name('products.restore');

    Route::resource('blogs', BlogController::class);
});
