<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\OrdersController;

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
Route::name('order_')->group(function () {
    Route::get('/order', [OrdersController::class, 'index'])->name('home');
    Route::post('/order', [OrdersController::class, 'store'])->name('create');
 });

Route::name('coupon_')->group(function () {  
    Route::get('/coupon',[MyController::class,'coupon'])->name("page");
    Route::post('/coupon',[MyController::class,'coupon_store'])->name("create");
});
Route::get('/sales',[MyController::class,'sales'])->name("SalesPage");
Route::get('/addsales',[MyController::class,'addsales'])->name("AddSales");
Route::get('/managesales',[MyController::class,'manageSellAll'])->name("manage.sell.all");
Route::post('/managesales',[MyController::class,'managesales'])->name("manage.sell.store");
Route::post('/product', [ProductsController::class, 'store'])->name('product');
