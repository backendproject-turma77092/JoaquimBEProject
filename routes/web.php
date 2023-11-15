<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchasesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/add-user', [UsersController::class, 'AddUser'])->name('user.add');
Route::get('/all-users', [UsersController::class, 'allUsers'])->name('user.all');
Route::get('/delete-user/{id}', [UsersController::class, 'deleteUser'])->name('user.delete');
Route::post('/create-user', [UsersController::class, 'createUser'])->name('user.create');
Route::get('/get-user/{id}', [UsersController::class, 'getUser'])->name('user.get');
Route::get('/add-provider', [ProviderController::class, 'AddProvider'])->name('provider.add');
Route::get('/all-provider', [ProviderController::class, 'AllProvider'])->name('provider.all');
Route::get('/get-Provider/{id}', [ProviderController::class, 'GetProvider'])->name('provider.get');
Route::post('/create-provider', [ProviderController::class, 'createProvider'])->name('provider.create');
Route::get('/delete-provider/{id}', [ProviderController::class, 'deleteProvider'])->name('provider.delete');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');
Route::get('/add-product', [ProductController::class, 'AddProduct'])->name('product.add');
Route::get('/all-product', [ProductController::class, 'allProduct'])->name('product.all');
Route::get('/get-product/{id}', [ProductController::class, 'GetProduct'])->name('product.get');
Route::post('/create-product', [ProductController::class, 'createProduct'])->name('product.create');
Route::get('/search', 'ProductController@search');
Route::put('/product/update/{id}', 'App\Http\Controllers\ProductController@update')->name('product.update');
Route::get('/purchases', [PurchasesController::class, 'viewPurchases'])->name('purchases.view');
Route::get('/add-purchase', [PurchasesController::class, 'addPurchaseForm'])->name('purchases.add');
Route::post('/create-purchase', [PurchasesController::class, 'createPurchase'])->name('purchases.create');
Route::delete('/purchase/delete/{id}', [PurchasesController::class, 'deletePurchase'])->name('purchases.delete');
Route::get('/purchase/edit/{id}', [PurchasesController::class, 'editPurchaseForm'])->name('purchases.edit');
Route::put('/purchase/update/{id}', [PurchasesController::class, 'updatePurchase'])->name('purchases.update');
Route::get('/products/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/purchases/search', 'App\Http\Controllers\PurchasesController@search')->name('purchases.search');
Route::fallback(function(){
    return '<h1>Erro no route da página</h1>';
});

