@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Usuarios</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                            <a class="breadcrumb-item" href="{{url('users')}}">Usuarios</a>
                            <span class="breadcrumb-item active">Editar usuario</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Registrar un nuevo usuario</h2>
                        <br>
                        <form action="{{url('users/'.$usuario->IdUsua)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <!-- Input Nombres -->
                                <div class="form-group col-md-6">
                                    <label for="nombres"><sup class="obligatorio">*</sup>Nombres</label>
                                    <input type="text" class="form-control" name="nombres" id="nombres"
                                           placeholder="Nombres" value="{{$usuario->NombUsua}}">
                                    <strong class="text-danger">{{$errors->first('nombres')}}</strong>
                                </div>

                                <!-- Input Apellidos -->
                                <div class="form-group col-md-6">
                                    <label for="apellidos"><sup class="obligatorio">*</sup>Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos"
                                           placeholder="Apellidos" value="{{$usuario->ApelUsua}}">
                                    <strong class="text-danger">{{$errors->first('apellidos')}}</strong>
                                </div>

                                <!-- Select Tipo de documento -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Tipo de documento</label>
                                    <select id="inputState" class="form-control" name="tipoDoc" >
                                        <option value="0">Elige</option>
                                        <option value="C.C" {{ $usuario->TipoDocUsua == 'C.C' ? 'selected' : '' }}>C.C</option>
                                        <option value="T.I" {{ $usuario->TipoDocUsua == 'T.I' ? 'selected' : '' }}>T.I</option>
                                    </select>
                                    <strong class="text-danger">{{$errors->first('tipoDoc')}}</strong>
                                </div>

                                <!-- Input N??mero de identificaci??n -->
                                <div class="form-group col-md-6">
                                    <label for="numerodoc"><sup class="obligatorio">*</sup>N??mero de
                                        identificaci??n</label>
                                    <input type="text" class="form-control" name="numerodoc" id="numerodoc"
                                           placeholder="N??mero de identificaci??n" value="{{$usuario->NumbDocUsua}}">
                                    <strong class="text-danger">{{$errors->first('numerodoc')}}</strong>
                                </div>

                                <!-- Input Fecha de nacimiento -->
                                <div class="form-group col-md-6">
                                    <label for="fechaNacimiento"><sup class="obligatorio">*</sup>Fecha de
                                        nacimiento</label>
                                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento"
                                           value="{{$usuario->FechNaciUsua}}">
                                    <strong class="text-danger">{{$errors->first('fechaNacimiento')}}</strong>
                                </div>

                                <!-- Input Correo misena -->
                                <div class="form-group col-md-6">
                                    <label for="email"><sup class="obligatorio">*</sup>Correo misena</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                           placeholder="Correo misena" value="{{$usuario->email}}">
                                    <strong class="text-danger">{{$errors->first('email')}}</strong>
                                </div>

                                <!-- Select Rol usuario -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Rol</label>
                                    <select id="inputState" class="form-control" name="rol">
                                        <option value="0">Elige</option>
                                        @foreach($rol as $roles)
                                            <option value="{{$roles -> IdRol}}" {{ $usuario->FkIdRol == $roles->IdRol ? 'selected' : '' }}>{{$roles -> TipoRol}}</option>
                                        @endforeach
                                    </select>
                                    <strong class="text-danger">{{$errors->first('rol')}}</strong>
                                </div>
                            </div>

                            <!-- Input Estado -->
                            <div class="form-group">
                                <label><sup class="obligatorio">*</sup>Estado</label>
                                <div class="switch m-r-10">
                                    <label> Inactivo
                                        <input type="checkbox" name="estado" id="estado" checked value="1">
                                        <label for="estado"></label> Activo
                                    </label>
                                    <strong class="text-danger">{{$errors->first('estado')}}</strong>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-enviar" value="Modificar">
                        </form>
                    </div>
                </div>
            </div>
 @endsection
