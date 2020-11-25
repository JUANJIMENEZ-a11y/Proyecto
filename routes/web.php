<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::resource('clientes', App\Http\Controllers\clientesController::class);

Route::resource('articulos', App\Http\Controllers\articulosController::class);

Route::resource('proveedores', App\Http\Controllers\proveedoresController::class);

Route::resource('categorias', App\Http\Controllers\categoriasController::class);

Route::resource('ingresos', App\Http\Controllers\ingresosController::class);

Route::resource('detallesIngresos', App\Http\Controllers\detalles_ingresoController::class);

Route::resource('ventas', App\Http\Controllers\ventasController::class);

Route::resource('detallesVentas', App\Http\Controllers\detalles_ventaController::class);