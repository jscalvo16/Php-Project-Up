<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;

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
        return view('usuarios.usuarios')->with('users', $User);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Rol::all();
        return view('usuarios.nuevoUsuario',compact('rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $maxVal = Usuario::all()->max('IdUsua');
        $maxVal++;

        $newUser = new Usuario;
        $newUser->NombUsua = $request->input("nombres");
        $newUser->ApelUsua = $request->input("apellidos");
        $newUser->TipoDocUsua = $request->input("tipoDoc");
        $newUser->NumbDocUsua = $request->input("numerodoc");
        $newUser->FechNaciUsua = $request->input("fechaNacimiento");
        $newUser->email = $request->input("email");
        $newUser->password = $request->input("contraseña");
        $newUser->FkIdRol = $request->input("rol");
        $newUser->EstaUsua = $request->input("estado");

        $newUser->save();

        return redirect('users')->with("mensaje","Usuario registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = Usuario::find($id);
        $rol = Rol::all();
        return view('usuarios.editarUsuario',compact('rol'))->with('usuario',$User);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $User = Usuario::find($id);

        $User->NombUsua = $request->input("nombres");
        $User->ApelUsua = $request->input("apellidos");
        $User->TipoDocUsua = $request->input("tipoDoc");
        $User->NumbDocUsua = $request->input("numerodoc");
        $User->FechNaciUsua = $request->input("fechaNacimiento");
        $User->email = $request->input("email");
        $User->password = $request->input("contraseña");
        $User->FkIdRol = $request->input("rol");
        $User->EstaUsua = $request->input("estado");

        $User->save();

        return redirect('users')->with("mensaje","Información modificada correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
