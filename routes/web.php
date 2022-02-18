<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceQuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/customers', [CustomerController::class, 'listCustomer']);
Route::get('/customer-create', [CustomerController::class], 'showForm');
Route::post('/customer-store', [CustomerController::class, 'storeCustomer']);

Route::get('/products', [ProductController::class, 'listProduct']);
Route::get('/product-create', [ProductController::class, 'showForm']);
Route::post('/product-store', [ProductController::class, 'storeProduct']);

Route::get('/price-quotes', [PriceQuoteController::class, 'listQuote']);
Route::get('/price-quotes-create', [PriceQuoteController::class, 'showForm']);
Route::post('/price-quotes-store', [PriceQuoteController::class, 'storeQuote']);
