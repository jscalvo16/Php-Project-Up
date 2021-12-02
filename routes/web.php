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

// Rutas para las acciones de login
Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin');

// Rutas para la gestión de los usuarios y relacionados
// Ruta REST para la gestión de usuarios
Route::resource('users','App\Http\Controllers\UsuarioController');

// Rutas para la gestión de las fichas de caracterización y relacionados
// Ruta REST para la gestión de fichas de caracterización
Route::resource('ficha','App\Http\Controllers\fichaController');

// Rutas para la gestión de los grupos de proyecto y relacionados
// Ruta REST para la gestión  de grupos de proyecto
Route::resource('grupo','App\Http\Controllers\GrupoController');

// Ruta para crear un grupo
Route::get('ficha/{idFicha}/creargrupo','App\Http\Controllers\GrupoController@crearGrupo');

// Ruta para editar un grupo
Route::get('ficha/{idFicha}/grupo/{idGrupo}/editargrupo','App\Http\Controllers\GrupoController@editarGrupo');

// Ruta para mostrar la información de grupo y los entregables de la ficha
Route::get('ficha/{idFicha}/grupo/{idGrupo}', 'App\Http\Controllers\GrupoController@mostrarGrupoFicha');

// Ruta para desvincular a un integrante de un grupo
Route::post('desvincular/{idIntegrante}', 'App\Http\Controllers\GrupoController@desvincular');

// Rutas para la gestión de los entregables y relacionados
// Ruta REST para la gestión de entregables
Route::resource('entregable', 'App\Http\Controllers\EntregableController');
Route::get('ficha/{idFicha}/grupo/{idGrupo}/entregable/{idEntre}', 'App\Http\Controllers\EntregableController@mostarEntregables');

