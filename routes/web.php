<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::get('/', [HomeController::class, 'index'])

->name('home');

Route::get('/whoami', function (){
    return 'Jayvee Alapide | 2023-71200 | Block 4C | ITRACKB4 Laravel 12';
});


Route::get('/products/filter/{Brand?}', [ProductController::class, 'filter'])
->name('products.filter');

Route::resource('products', ProductController::class)
    ->middlewareFor(['create', 'store', 'edit', 'update', 'destroy'], 'auth');

Route::get('/register',  [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/login',   [LoginController::class, 'create'])->name('login');
Route::post('/login',  [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

