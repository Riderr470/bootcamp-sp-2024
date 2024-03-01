<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\ProductController;



Route::get('/', [HomeController::class, 'user'])->name("root");

Route::get('/orders/list', [HomeController::class, 'order'])->name("orders.list");

Route::get('/products/list', [ProductController::class, 'showList'])->name("products.list");

Route::get('/products/create', [ProductController::class, 'create'])->name("products.create");





















Route::get('/sign-in', [HomeController::class, 'signUp'])->name("sign-in");

Route::get('/admin', [HomeController::class, 'admin']);

Route::get('/create', [HomeController::class, 'create']);
Route::post('/create-student', [HomeController::class, 'storeStudent']);


Route::get('/request-test', [TestController::class, 'request']);
Route::post('/request-test', [TestController::class, 'request']);



