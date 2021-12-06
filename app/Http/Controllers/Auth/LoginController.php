<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    // Mostrar el formulario del login
    public function mostrarLogin(){
        return view('autenticacion.login');
    }

    // Método para la autenticación por login
    public function login(LoginRequest $request){
        if(Auth::attempt(["email"=> $request->input("correo"),  "password"=> $request->input("contrasena")])){

            // Retorno de Administrador
            if(Auth::user()->FkIdRol == 4) {
                return redirect('users');
            }

            // Retorno de Coordinador
            if(Auth::user()->FkIdRol == 3){
                return redirect('ficha');
            }

            // Retorno de Instructor
            if(Auth::user()->FkIdRol == 2){
                return redirect('ficha');
            }

            // Retorno de Aprendiz
            if(Auth::user()->FkIdRol == 1){
                $fichas = DB::table('ficha')->
                leftJoin('usuafich', 'usuafich.FkIdFicha', '=', 'ficha.IdFicha')->
                select('ficha.IdFicha as IdFicha', 'ficha.NumbFich as NumbFich', 'ficha.Trimestre as Trimestre', 'ficha.InicEtapElec as InicEtapElec', 'ficha.FinEtapElec as FinEtapElec', 'ficha.JornFicha as JornFicha')->
                where('usuafich.FkIdUsua', '=', Auth::user()->IdUsua)->
                get();

                foreach($fichas as $ficha) {
                    return redirect('ficha/'. $ficha->IdFicha);
                }
            }

            return redirect('users');
        }else{
            return redirect('login')->with("credenciales_invalidas", "Credenciales no validas");
        }

    }


    // Método para cerrar sesión
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        return redirect('login');
    }
}
