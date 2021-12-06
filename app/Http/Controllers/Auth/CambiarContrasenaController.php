<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\changePasswordRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class CambiarContrasenaController extends Controller
{
    // Método para mostrar el formulario para cambiar la contraseña
    public function mostrarFormCambiarPass($idUser) {
        $usuario = Usuario::find($idUser);
        return view('autenticacion.cambiarContrasena')->with('usuario', $usuario);
    }

    // Método para cambiar la contraseña del usuario
    public function cambiarContrasena(changePasswordRequest  $request, $idUser){
        $modificarUser = Usuario::find($idUser);
        $modificarUser->password = Hash::make($request->input('password'));
        $modificarUser->save();

        return redirect('login')->with("mensaje_exito", "Cambio de contraseña exitoso");
    }
}
