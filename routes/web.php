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

// Ruta para mostrar el index
Route::get('inicio', 'App\Http\Controllers\indexController@mostrarIndex');

Route::get('prueba', 'App\Http\Controllers\indexController@mostrarPagina');

// Rutas para las acciones de login
Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin');

Route::resource('users','App\Http\Controllers\UsuarioController');
Route::resource('ficha','App\Http\Controllers\fichaController');
