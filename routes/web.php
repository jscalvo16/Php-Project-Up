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

Route::get('recuperar-password', "App\Http\Controllers\Auth\ResetPasswordController@emailform");
Route::post('enviar-link',"App\Http\Controllers\Auth\ResetPasswordController@submitlink");
Route::get('reset-password/{token}', "App\Http\Controllers\Auth\ResetPasswordController@resetform");
Route::post('reset-password', "App\Http\Controllers\Auth\ResetPasswordController@resetpassword");

Route::resource('users','App\Http\Controllers\UsuarioController');

Route::get('prueba-email',function(){
    $detalles = ["Enviado por" => "Project Up"];

    Mail::to('sneira58@misena.edu.co')->send(new TestMail($detalles));
    die('correo enviado');
});
