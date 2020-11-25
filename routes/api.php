<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('clientes', App\Http\Controllers\API\clientesAPIController::class);

Route::resource('articulos', App\Http\Controllers\API\articulosAPIController::class);

Route::resource('proveedores', App\Http\Controllers\API\proveedoresAPIController::class);

Route::resource('categorias', App\Http\Controllers\API\categoriasAPIController::class);

Route::resource('ingresos', App\Http\Controllers\API\ingresosAPIController::class);

Route::resource('detalles_ingresos', App\Http\Controllers\API\detalles_ingresoAPIController::class);

Route::resource('ventas', App\Http\Controllers\API\ventasAPIController::class);

Route::resource('detalles_ventas', App\Http\Controllers\API\detalles_ventaAPIController::class);