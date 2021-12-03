<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Http\Controllers\Auth\ResetPasswordController;

// Ruta para mostrar el index
Route::get('/inicio', function () {
    return view('index');
});

//Mostrar el perfil del usuario
Route::get('perfil', 'App\Http\Controllers\indexController@mostrarPerfil')->middleware('auth');

// Rutas del login
Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');

// Ruta REST para la gestión de usuarios
Route::resource('users','App\Http\Controllers\UsuarioController')->middleware('auth');

// Ruta para el cambio de estado del usuario
Route::get('users/{users}/manejoEstado','App\Http\Controllers\UsuarioController@manejoEstado')->middleware('auth');

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
Route::resource('ficha','App\Http\Controllers\fichaController')->middleware('auth');

// Ruta REST para la gestión  de grupos de proyecto
Route::resource('grupo','App\Http\Controllers\GrupoController')->middleware('auth');

// Ruta para crear un grupo
Route::get('ficha/{idFicha}/creargrupo','App\Http\Controllers\GrupoController@crearGrupo')->middleware('auth');

// Ruta para editar un grupo
Route::get('ficha/{idFicha}/grupo/{idGrupo}/editargrupo','App\Http\Controllers\GrupoController@editarGrupo')->middleware('auth');

// Ruta para mostrar la información de grupo y los entregables de la ficha
Route::get('ficha/{idFicha}/grupo/{idGrupo}', 'App\Http\Controllers\GrupoController@mostrarGrupoFicha')->middleware('auth');

// Ruta para desvincular a un integrante de un grupo
Route::post('desvincular/{idIntegrante}', 'App\Http\Controllers\GrupoController@desvincular');

// Ruta REST para la gestión de entregables
Route::resource('entregable', 'App\Http\Controllers\EntregableController')->middleware('auth');
Route::get('ficha/{idFicha}/grupo/{idGrupo}/entregable/{idEntre}', 'App\Http\Controllers\EntregableController@mostarEntregables')->middleware('auth');

// Ruta para descargar un entregable
Route::get('descargarEntre/{idEntre}', 'App\Http\Controllers\EntregableController@descargarArchivo')->middleware('auth');

// Ruta para descargar un avance
Route::get('descargarAvance/{idAvan}', 'App\Http\Controllers\AvanceController@descargarAvance')->middleware('auth');

// Ruta REST para la gestión de los avances
Route::resource('avance', 'App\Http\Controllers\AvanceController')->middleware('auth');

// Ruta para abrir chat para las observaciones de un avance en específico
Route::get('observacion/{idAvance}', 'App\Http\Controllers\MensajesController@mostrarChat')->middleware('auth');

// Ruta para la carga masiva
Route::post('carga','App\Http\Controllers\CargaMasivaController@cargaM');

// Ruta REST para la asignación
Route::resource('asignacion','App\Http\Controllers\AsignacionController')->middleware('auth');

// Ruta para enviar el mensaje
Route::post('enviar', 'App\Http\Controllers\MensajesController@enviar');

// Ruta para acceder a la página de reportes
Route::get('reportes', 'App\Http\Controllers\ReportesController@mostrarVista')->middleware('auth');

// Ruta para acceder al pdf
Route::post('PDF', 'App\Http\Controllers\PDFController@informe');

//Ruta para acceder al excel
Route::post('EXCEL', 'App\Http\Controllers\ExcelController@export');

// Ruta para descargar la plantilla
Route::get('descargarplantilla', 'App\Http\Controllers\PlantillaController@descargarAvance')->middleware('auth');
