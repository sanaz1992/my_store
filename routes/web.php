<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserName;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->middleware(CheckUserName::class);

// Route::prefix('/users')->name('users.')->middleware(CheckUserName::class)
//     ->group(function () {

//         Route::get('/{id}', [UserController::class, 'show'])
//             ->where('id', '[0-9]+')->name('show');

//         Route::post('/store', [UserController::class, 'store'])->name('store');

//     });

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
