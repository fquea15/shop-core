<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailsSalesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// Route::get('/create-admin', [AuthController::class, 'createAdmin'])->name('create-admin');


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('signin');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix("sales")->middleware(['auth'])->group(function () {
    Route::get('/new-sale', [SalesController::class, 'index'])->name('new-sale');
});

Route::prefix("detail")->middleware(['auth'])->group(function () {
    Route::get('/detail-sale', [DetailsSalesController::class, 'index'])->name('detail-sale');
});

Route::prefix("categories")->middleware(['auth'])->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/create', [CategoriesController::class, 'create'])->name('create-category');
    Route::post('/store', [CategoriesController::class, 'store'])->name('store-category');
});

Route::prefix("products")->middleware(['auth'])->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products');
});

Route::prefix("clients")->middleware(['auth'])->group(function () {
    Route::get('/', [ClientsController::class, 'index'])->name('clients');
});

Route::prefix("users")->middleware(['auth'])->group(function () {
    Route::get('/', [UsersController::class, 'index'])->name('users');
});
