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

// Ruta de prueba
Route::get('prueba', 'App\Http\Controllers\indexController@mostrarPagina');

// Rutas para las acciones de login
Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin');


// Ruta REST para la gestión de usuarios
Route::resource('users','App\Http\Controllers\UsuarioController');
// Ruta REST para la gestión de fichas de caracterización
Route::resource('ficha','App\Http\Controllers\fichaController');
// Ruta REST para la gestión  de grupos de proyecto
Route::resource('grupo','App\Http\Controllers\GrupoController');
// Ruta REST para la gestión de entregables
Route::resource('entregable', 'App\Http\Controllers\EntregableController');
// Ruta entregablesFicha para mostrar los entregables según ficha en la que se encientra
Route::get('ficha/{idFicha}/entregables', 'App\Http\Controllers\EntregableController@entregablesFicha');
// Ruta para mostrar el formulario para crear un entregable
Route::get('ficha/{idFicha}/entregables/create', 'App\Http\Controllers\EntregableController@crearForm');
// Ruta para mostrar el formulario para modificar un entregable
Route::get('ficha/{idFicha}/entregables/{idEntre}/edit', 'App\Http\Controllers\EntregableController@editarForm');
