@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Usuarios</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                            <a class="breadcrumb-item" href="{{url('users')}}">Usuarios</a>
                            <span class="breadcrumb-item active">Nuevo Usuario</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Registrar un nuevo usuario</h2>
                        <br>
                        <form action="{{url('users')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <!-- Input Nombres -->
                                <div class="form-group col-md-6">
                                    <label for="nombres"><sup class="obligatorio">*</sup>Nombres</label>
                                    <input type="text" class="form-control" name="nombres" id="nombres"
                                           placeholder="Nombres" value="{{old('nombres')}}">
                                    <strong class="text-danger">{{$errors->first('nombres')}}</strong>
                                </div>

                                <!-- Input Apellidos -->
                                <div class="form-group col-md-6">
                                    <label for="apellidos"><sup class="obligatorio">*</sup>Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos"
                                           placeholder="Apellidos" value="{{old('apellidos')}}">
                                    <strong class="text-danger">{{$errors->first('apellidos')}}</strong>
                                </div>

                                <!-- Select Tipo de documento -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Tipo de documento</label>
                                    <select id="inputState" class="form-control" name="tipoDoc">
                                        <option selected>Elige</option>
                                        <option value="C.C">C.C</option>
                                        <option value="T.I">T.I</option>
                                    </select>
                                    <strong class="text-danger">{{$errors->first('tipoDoc')}}</strong>
                                </div>

                                <!-- Input Número de identificación -->
                                <div class="form-group col-md-6">
                                    <label for="numerodoc"><sup class="obligatorio">*</sup>Número de
                                        identificación</label>
                                    <input type="text" class="form-control" name="numerodoc" id="numerodoc"
                                           placeholder="Número de identificación" value="{{old('numerodoc')}}">
                                    <strong class="text-danger">{{$errors->first('numerodoc')}}</strong>
                                </div>

                                <!-- Input Fecha de nacimiento -->
                                <div class="form-group col-md-6">
                                    <label for="fechaNacimiento"><sup class="obligatorio">*</sup>Fecha de
                                        nacimiento</label>
                                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento"
                                           value="{{old('fechaNacimiento')}}">
                                    <strong class="text-danger">{{$errors->first('fechaNacimiento')}}</strong>
                                </div>

                                <!-- Input Correo misena -->
                                <div class="form-group col-md-6">
                                    <label for="email"><sup class="obligatorio">*</sup>Correo misena</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                           placeholder="Correo misena" value="{{old('email')}}">
                                    <strong class="text-danger">{{$errors->first('email')}}</strong>
                                </div>

                                <!-- Select Rol usuario -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Rol</label>
                                    <select id="inputState" class="form-control" name="rol">
                                        <option selected>Elige</option>
                                        @foreach($rol as $roles)
                                            <option value="{{$roles -> IdRol}}">{{$roles -> TipoRol}}</option>
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

                            <input type="submit" class="btn btn-enviar" value="Registrar">
                        </form>
                    </div>
                </div>
            </div>
@endsection
