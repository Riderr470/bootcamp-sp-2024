<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;



Route::get('/', [HomeController::class, 'user'])->name("root");

Route::get('/orders/list', [HomeController::class, 'order'])->name("orders.list");

Route::get('/products/list', [ProductController::class, 'showList'])->name("products.list");

Route::get('/products/create', [ProductController::class, 'create'])->name("products.create");



Route::get('/catagory/create', [CategoryController::class, 'create'])->name("category.create");
Route::post('/catagory/create', [CategoryController::class, 'store']);

Route::get('/catagory/view', [CategoryController::class, 'viewCategory'])->name('category.view');

























Route::get('/sign-in', [HomeController::class, 'signUp'])->name("sign-in");

Route::get('/admin', [HomeController::class, 'admin']);

Route::get('/create', [HomeController::class, 'create']);
Route::post('/create-student', [HomeController::class, 'storeStudent']);


Route::get('/Personal/form', [TestController::class, 'createForm'])->name('personal.form');
Route::post('/Personal/form', [TestController::class, 'storeForm']);

Route::get('/Personal/view', [TestController::class, 'viewForm'])->name('personal.view');



