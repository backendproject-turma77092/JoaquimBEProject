<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;

// Pagina de login para o Laravel

Route::get('/', function () {
    return view('welcome');
});

// dentro da @php dd($variavel)@endphp para ver o erro

// Dashboards

Route::get('/', [IndexController::class, 'index'])->name('home');

// Controllers de clientes

Route::get('/add-user', [UsersController::class, 'AddUser'])->name('user.add');
Route::get('/all-users', [UsersController::class, 'allUsers'])->name('user.all');
Route::get('/delete-user/{id}', [UsersController::class, 'deleteUser'])->name('user.delete');
Route::post('/create-user', [UsersController::class, 'createUser'])->name('user.create');
// controllers de users / Get users

Route::get('/get-user/{id}', [UsersController::class, 'getUser'])->name('user.get');


// Providers
Route::get('/add-provider', [ProviderController::class, 'AddProvider'])->name('provider.add');
Route::get('/all-provider', [ProviderController::class, 'AllProvider'])->name('provider.all');
Route::get('/get-Provider/{id}', [ProviderController::class, 'GetProvider'])->name('provider.get');
Route::post('/create-provider', [ProviderController::class, 'createProvider'])->name('provider.create');



// Produtos

Route::get('/add-product', [ProductController::class, 'AddProduct'])->name('product.add');
Route::get('/all-product', [ProductController::class, 'allProduct'])->name('product.all');
Route::get('/get-product/{id}', [ProductController::class, 'GetProduct'])->name('product.get');

//continue.................
//.................................


// Produtos

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

