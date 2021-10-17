<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Validator;
// use App\Models\User;

class ResetPasswordController extends Controller
{
    // Método para mostrar el formulario de envio de correo del link de seguridad
    public function emailForm()
    {
        return view('autenticacion.recordar_correo');
    }


    // Método para enviar el link de seguridad al correo suministrado
    public function submitLink(Request $r)
    {
        // Validación de formulario
        $reglas = [
            "email" => 'required|exists:usuario,email',
        ];
        $mensajes = [
            "required" => "Campo requerido",
            "exists" => "Ese Correo no existe",
        ];

        $validador = Validator::make($r->all(), $reglas, $mensajes);
        if ($validador->fails()) {
            return redirect('recuperar-password')
                ->withErrors($validador)
                ->withInput();
        }

        // Generar el token de seguridad
        $token = Str::random(64);
        DB::table('password_resets')->insert(
            [
                "email" => $r->input("email"),
                "token" => $token,
                "created_at" => Carbon::now()
            ]
        );

        // Enviar el correo al destino con el token de seguridad
        Mail::to($r->input("email"))->send(new ResetPasswordMail($token));

        // Retornar al login
        return view('autenticacion.login');
    }

    // Método para mostrar el formulario para cambiar la contraseña
    public function resetForm($token)
    {
        return view('autenticacion.reset-password')->with('token', $token);
    }

    // Método para reiniciar la contraseña
    public function resetPassword(Request $r)
    {
        // Validación del formulario
        $reglas = [
            "email" => 'required|exists:usuario,email',
            "password" => 'required|confirmed',
        ];
        $mensajes = [
            "required" => "Campo requerido",
            "exist" => "El correo no existe",
            "confirmed" => "No Coincide",
        ];

        $validador = Validator::make($r->all(), $reglas, $mensajes);
        if ($validador->fails()) {
            return redirect('reset-password')
                ->withErrors($validador)
                ->withInput();
        }

        // Obtener el registro correspontiene al token y los datos ingresados en la tabla password_resets
        $pass_reset = DB::table('password_resets')->where(
                [
                    'email' => $r->input('email'),
                    'token' => $r->input('token')
                ]
            )->first();

        // Validar que el token exista
        if ($pass_reset == null) {
            die('token_invalido');
        }

        // Actualizar la contraseña al usuario correspondiente
        $user = Usuario::where('email', $r->input('email'))->first();
        //var_dump($user);
        $user->password = Hash::make($r->input('password'));
        $user->save();

        // Retornar al login
        return redirect('login')->with("mensaje_exito", "Cambio de contraseña exitoso");
    }
}
