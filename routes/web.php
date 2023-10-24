<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;

// Pagina de login para o Laravel

Route::get('/', function () {
    return view('welcome');
});

// dentro da @php dd($variavel)@endphp para ver o erro

// Dashboards

Route::get('/home', [IndexController::class, 'index'])->name('home');

// Controllers de users

Route::get('/add-user', [UsersController::class, 'AddUser'])->name('user.add');
Route::get('/all-users', [UsersController::class, 'allUsers'])->name('user.all');

// controllers de users / Get users

Route::get('/get-user/{name}', [UsersController::class, 'getUser'])->name('user.get');


// Providers

Route::get('/add-provider', function () {
    return view('add.provider');
})->name('provider.add');

Route::get('/all-provider', function () {
    return view('all.provider');
})->name('provider.all');


// Produtos

Route::get('/add-product', function () {
    return view('add.product');
})->name('product.add');

Route::get('/all-product', function () {
    return view('all.product');
})->name('product.all');

// clientes

Route::get('/add-client', function () {
    return view('add.client');
})->name('client.add');

Route::get('/all-client', function () {
    return view('all.client');
})->name('client.all');


// Stock

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');


// fazer compras e ver compras

Route::get('/add-purchase', function () {
    return view('add.purchase');
})->name('purchase.add');

Route::get('/all-purchase', function () {
    return view('all.purchase');
})->name('purchase.all');

// Erro da página que não existe

Route::fallback(function(){
    return '<h1>Erro no route da página</h1>';
});

