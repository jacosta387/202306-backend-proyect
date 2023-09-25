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
    return 'HOME PAGE';
});

Route::get('productos', function () {
    return "El listado de todos los productos";
});

Route::get('productos/create', function ($id) {
    return "Aqui va a estar el formulario para la creación de archivos";
});

Route::get('productos/{id}', function ($id) {
    return "el nombre del producto es $id";
});

Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "el nombre del producto es $id con la categoria $categoria";
});

