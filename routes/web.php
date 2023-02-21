<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Register', [App\Http\Controllers\RegisterController::class, 'show']);

Route::post('/Register', [App\Http\Controllers\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'show']);

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


route::view('acercade','acercade')->name('acercade');
route::view('menu','menu')->name('menu');
route::view('productos','productos')->name('productos');
route::view('opiniones','opiniones')->name('opiniones');
route::view('contacto','contacto')->name('contacto');
route::view('recetas','recetas')->name('recetas');

Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
