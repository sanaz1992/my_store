<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserName;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [HomeController::class, 'dashboard']);

// Route::prefix('/users')->name('users.')->middleware(CheckUserName::class)
//     ->group(function () {

//         Route::get('/{id}', [UserController::class, 'show'])
//             ->where('id', '[0-9]+')->name('show');

//         Route::post('/store', [UserController::class, 'store'])->name('store');

//     });

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('users',AdminUserController::class);
});
