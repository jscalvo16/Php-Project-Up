<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
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
            "email" => 'required|regex:/(.)@misena\.edu\.co/i|exists:usuario,email',
        ];
        $mensajes = [
            "required" => "Correo misena requerido",
            "exists" => "El correo no se encuentra registrado",
            "regex" => "Formato de correo incorrecto (Correo misena)"
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
        return redirect('login');
    }

    // Método para mostrar el formulario para cambiar la contraseña
    public function resetForm($token)
    {
        return view('autenticacion.reset-password')->with('token', $token);
    }

    // Método para reiniciar la contraseña
    public function resetPassword(ResetPasswordRequest $r)
    {
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
