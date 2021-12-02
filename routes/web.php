<?php

use Illuminate\Support\Facades\Route;

// Ruta para mostrar el index
Route::get('/inicio', function () {
    return view('index');
});

// Rutas para las acciones de login
Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin');

Route::resource('users','App\Http\Controllers\UsuarioController');
