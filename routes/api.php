<?php

use App\Http\Controllers\SaleController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/sale', function (){

});


// Aqui me parece um bom lugar para criar as rotas....


Route::get('', [SaleController::class, 'sale']);
