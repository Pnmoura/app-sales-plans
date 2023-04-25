<?php

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

use App\Http\Controllers\SaleController;

Route::get('/criar-venda', function () {
    return view ('criarVenda', [SaleController::class, 'sale']);
});

Route::post('/success', [SaleController::class, 'store']);


