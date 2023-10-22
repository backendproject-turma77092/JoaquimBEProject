<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/add-user', function () {
    return view('users.add_user');
})->name('user.add');

Route::get('/all-users', function () {
    return view('users.all_users');
})->name('user.all');

Route::get('/add-provider', function () {
    return view('add.provider');
})->name('provider.add');

Route::get('/all-provider', function () {
    return view('all.provider');
})->name('provider.all');

Route::get('/add-product', function () {
    return view('add.product');
})->name('product.add');

Route::get('/all-product', function () {
    return view('all.product');
})->name('product.all');

Route::get('/add-client', function () {
    return view('add.client');
})->name('client.add');

Route::get('/all-client', function () {
    return view('all.client');
})->name('client.all');

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::get('/add-purchase', function () {
    return view('add.purchase');
})->name('purchase.add');

Route::get('/all-purchase', function () {
    return view('all.purchase');
})->name('purchase.all');

Route::fallback(function(){
    return '<h1>Erro no route da página</h1>';
});

