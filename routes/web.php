<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Http\Controllers\Auth\ResetPasswordController;

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

Route::get('inicio', 'App\Http\Controllers\indexController@mostrarIndex');

Route::get('prueba', 'App\Http\Controllers\indexController@mostrarPagina');

Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::resource('users','App\Http\Controllers\UsuarioController');
Route::get('users/{users}/manejoEstado','App\Http\Controllers\UsuarioController@manejoEstado');
Route::resource('ficha','App\Http\Controllers\fichaController');

Route::get('prueba-email',function(){
    $detalles = ["Enviado por" => "Juan Sebastian Calvo"];

    Mail::to('jsebascc2003@gmail.com')->send(new TestMail($detalles));
    die('correo enviado');
});

// Rutas para el cambio de contraseña por solicitud del usuario
Route::get('recuperar-password', "App\Http\Controllers\Auth\ResetPasswordController@emailform");
Route::post('enviar-link',"App\Http\Controllers\Auth\ResetPasswordController@submitlink");
Route::get('reset-password/{token}', "App\Http\Controllers\Auth\ResetPasswordController@resetform");
Route::post('reset-password', "App\Http\Controllers\Auth\ResetPasswordController@resetpassword");

// Rutas para cambio de contraseña cuando se crea un usuario
Route::get('cambiarContrasena/{idUser}', 'App\Http\Controllers\Auth\CambiarContrasenaController@mostrarFormCambiarPass');
Route::post('cambiarContrasena/{idUser}', 'App\Http\Controllers\Auth\CambiarContrasenaController@cambiarContrasena');



