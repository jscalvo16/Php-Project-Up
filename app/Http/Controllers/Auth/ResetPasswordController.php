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
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Validator;
Use Alert;
use App\Models\User;

class ResetPasswordController extends Controller
{
    //
    public function emailForm(){
        return view('autenticacion.recordar_correo');

    }


    public function submitLink(Request $r){

        $reglas =[
            "email" => 'required|exists:usuario,email',


        ];
        $mensajes =[
            "required" => "Campo requerido",
            "exists" => "Ese Correo no existe",


        ];



{   {

    $validador= Validator::make($r->all(),$reglas,$mensajes);
    if($validador->fails()){
        return redirect('recuperar-password')
        ->withErrors($validador)
        ->withInput();
    }

        $token = Str::random(64);
        DB::table('password_resets')->insert(
            [
                "email" => $r->input("email"),
                "token" => $token,
                "created_at" => Carbon::now()
            ]
            );



        Mail::to($r->input("email"))->send(new ResetPasswordMail($token));

        return view('autenticacion.enviar-link');

    }

    }
}

    public function resetForm($token){

            return view('autenticacion.reset-password')->with('token',$token);
    }

    public function resetPassword(Request $r){


        $reglas =[
            "email" => 'required|exists:users,email',
            "password" => 'required|confirmed',


        ];
        $mensajes =[
            "required" => "Campo requerido",
            "exist" => "El correo no existe",
            "confirmed" => "No Coincide",


        ];

        $validador= Validator::make($r->all(),$reglas,$mensajes);
        if($validador->fails()){
        return redirect('reset-password')
        ->withErrors($validador)
        ->withInput();
    }

        $pass_reset = DB::table('password_resets')->
        where([
            'email' => $r->input('email'),
            'token' => $r->input('token')
            ]


        )->first();

        if($pass_reset == null){
            die('token_invalido');
        }

        $user = Usuario::where('email',$r->input('email'))->first();
        $user->password = Hash::make($r->input('password'));
        $user->save();
        return redirect('login')
        ->with("mensaje_exito","Cambio de contraseña exitoso");

    }
}
