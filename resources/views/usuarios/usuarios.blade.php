@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Usuarios</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                            <span class="breadcrumb-item active">Usuarios</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if (session("mensaje"))
                            <div class="notification-toast top-right" id="notification-toast" data-delay="3000">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="alert alert-success m-b-0">
                                        <button type="button" class="ml-2 close" data-dismiss="toast"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="d-flex justify-content-start">
                                        <span class="alert-icon m-r-20 font-size-30">
                                            <i class="anticon anticon-check-circle text-success"></i>
                                        </span>
                                            <div class="m-t-10">
                                                <p>{{ session("mensaje") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <h4>Usuarios</h4>
                        <div class="row">
                            <div class="col-md-2 ml-auto">
                                <button class="btn btn-agregar-usuario" data-toggle="modal"
                                        data-target=".modal-carga-masiva">
                                    <i class="anticon anticon-upload"></i> Carga masiva
                                </button>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-agregar-usuario" href="{{url('users/create')}}">
                                    <i class="anticon anticon-plus"></i> Nuevo usuario
                                </a>
                            </div>
                        </div>
                        <div class="m-t-25">
                            <table id="data-table" class="table">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Tipo documento</th>
                                    <th>Número identificación</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $usuario)
                                    <tr>
                                        <td>{{$usuario -> NombUsua}}</td>
                                        <td>{{$usuario -> ApelUsua}}</td>
                                        <td>{{$usuario -> TipoDocUsua}}</td>
                                        <td>{{$usuario -> NumbDocUsua}}</td>
                                        <td>{{$usuario -> email}}</td>
                                        @if($usuario -> FkIdRol == 1)
                                            <td>Aprendiz</td>
                                        @endif
                                        @if($usuario -> FkIdRol == 2)
                                            <td>Instructor</td>
                                        @endif
                                        @if($usuario -> FkIdRol == 3)
                                            <td>Coordinador</td>
                                        @endif
                                        @if($usuario -> FkIdRol == 4)
                                            <td>Administrador</td>
                                        @endif
                                        <td class="text-center">
                                            @switch($usuario->EstaUsua)
                                                @case(null)
                                                <strong>Sin estado</strong>
                                                <button class="btn btn-warning" title="Activar">
                                                    <a href="{{url('users/'.$usuario->IdUsua.'/manejoEstado')}}"
                                                       title="Activar">
                                                        <i class="anticon anticon-poweroff"></i>
                                                    </a>
                                                </button>
                                                @break
                                                @case(1)
                                                <strong class="text-success">Activo</strong>
                                                <a href="{{url('users/'.$usuario->IdUsua.'/manejoEstado')}}"
                                                   class="btn btn-danger" title="Inactivar">
                                                    <i class="anticon anticon-stop"></i>
                                                </a>
                                                @break
                                                @case(2)
                                                <strong class="text-danger">Inhactivo</strong>
                                                <a href="{{url('users/'.$usuario->IdUsua.'/manejoEstado')}}"
                                                   class="btn btn-success" title="Activar">
                                                    <i class="anticon anticon-poweroff"></i>
                                                </a>
                                                @break
                                            @endswitch
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="{{url('users/'.$usuario->IdUsua.'/edit')}}"
                                               title="Modificar">
                                                <i class="anticon anticon-form" title="Modificar"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Tipo documento</th>
                                    <th>Número identificación</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- Modal para cargar aprendices -->
                        <div class="modal fade modal-carga-masiva" id="modalCargaMasiva">
                            <div class="modal-dialog modal-dialog-centered ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="modalCargaLabel">Cargar aprendices</h1>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" enctype="multipart/form-data" action="{{url('carga')}}">
                                            @csrf
                                            <div class="form-row">
                                                <!-- Input cargar arcivo -->
                                                <div class="form-group col-md-10">
                                                    <label for="archivo"><sup class="obligatorio">*</sup>Archivo
                                                        (Excel <i
                                                            class="anticon anticon-file-excel text-success"></i>)</label>
                                                    <input type="file" class="form-control" name="archivo"
                                                           id="archivo" placeholder="Archivo Excel">
                                                    <strong class="text-danger">{{$errors->first("archivo")}}</strong>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-cerrar-modal"
                                                        data-dismiss="modal">Cerrar
                                                </button>
                                                <input type="submit" class="btn btn-crear" value="Subir">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin modal -->
                    </div>
                </div>
            </div>
@endsection
