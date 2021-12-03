<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserEditarRequest;
use App\Http\Requests\UserRequest;
use App\Mail\CambiarContrasenaMail;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Ficha;
// use Maatwebsite\Excel\Facades\Excel;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = Usuario::all();
        $fichas = Ficha::all();
        return view('usuarios.usuarios', compact('fichas'))->with('users', $User);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Rol::all();
        $fichas = Ficha::all();
        return view('usuarios.nuevoUsuario', compact('rol', 'fichas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $maxVal = Usuario::all()->max('IdUsua');
        $maxVal++;

        // Generar contraseña aleatoria
        $contrasena = Str::random(12);

        // Crear al usuario
        $newUser = new Usuario;
        $newUser->NombUsua = $request->input("nombres");
        $newUser->ApelUsua = $request->input("apellidos");
        $newUser->TipoDocUsua = $request->input("tipoDoc");
        $newUser->NumbDocUsua = $request->input("numerodoc");
        $newUser->FechNaciUsua = $request->input("fechaNacimiento");
        $newUser->email = $request->input("email");
        $newUser->password = Hash::make($contrasena);
        $newUser->FkIdRol = $request->input("rol");
        $newUser->EstaUsua = $request->input("estado");
        $newUser->save();

        // Enviar correo para el cambio de contraseña
        Mail::to($request->input("email"))->send(new CambiarContrasenaMail($maxVal));

        return redirect('users')->with("mensaje", "Usuario registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = Usuario::find($id);
        $rol = Rol::all();
        $fichas = Ficha::all();
        return view('usuarios.editarUsuario', compact('rol', 'fichas'))->with('usuario', $User);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditarRequest $request, $id)
    {
        $User = Usuario::find($id);

        $User->NombUsua = $request->input("nombres");
        $User->ApelUsua = $request->input("apellidos");
        $User->TipoDocUsua = $request->input("tipoDoc");
        $User->NumbDocUsua = $request->input("numerodoc");
        $User->FechNaciUsua = $request->input("fechaNacimiento");
        $User->email = $request->input("email");
        $User->FkIdRol = $request->input("rol");
        $User->EstaUsua = $request->input("estado");

        $User->save();

        return redirect('users')->with("mensaje", "Información modificada correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function manejoEstado($id)
    {
        $user = Usuario::find($id);
        $msg = "";
        switch ($user->EstaUsua) {
            case null:
                $user->EstaUsua = 1;
                $user->save();
                break;
            case 1:
                $user->EstaUsua = 2;
                $user->save();
                break;
            case 2:
                $user->EstaUsua = 1;
                $user->save();
        }
        return redirect('users');
    }

    /*
    public  function cargaM(CargaMasivaRequest $request){
        $carga = ($request->file('archivo'));
        Excel::import(new UsuariosCarga(), $carga);
        return redirect('users')->with("mensaje", "Carga Exitosa");
    }
    */

}
