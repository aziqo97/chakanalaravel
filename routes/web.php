<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowProductsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Middleware\VerifyCsrfToken;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/order', [HomeController::class, 'order']);
Route::get('/cat/{id}', [ShowProductsController::class, 'ProductsByCategory']);
Route::post('/add-to-cart', [CartController::class, 'addtocart'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/load-cart-data', [CartController::class, 'cartloadbyajax']);
Route::get('/delcart/{id}', [CartController::class, 'delcart']);
Route::get('/clear-cart', [CartController::class, 'clearcart']);
Route::get('/product/{id}', [ShowProductsController::class, 'ProductsById']);
Route::get('/admin', function () {
    return view('admin');
});
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/products', ProductsController::class);

Auth::routes();

