<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Http\Controllers\Auth\ResetPasswordController;

// Ruta para mostrar el index
Route::get('/inicio', function () {
    return view('index');
});

// Rutas del login
Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');

// Ruta REST para la gestión de usuarios
Route::resource('users','App\Http\Controllers\UsuarioController');

// Ruta para el cambio de estado del usuario
Route::get('users/{users}/manejoEstado','App\Http\Controllers\UsuarioController@manejoEstado');

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

// Ruta REST para la gestión de fichas de caracterización
Route::resource('ficha','App\Http\Controllers\fichaController');

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

// Ruta REST para la gestión de entregables
Route::resource('entregable', 'App\Http\Controllers\EntregableController');
Route::get('ficha/{idFicha}/grupo/{idGrupo}/entregable/{idEntre}', 'App\Http\Controllers\EntregableController@mostarEntregables');

