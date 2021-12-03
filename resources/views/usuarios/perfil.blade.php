@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Usuarios</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                                <span class="breadcrumb-item active">Perfil</span>
                            </nav>
                        </div>
                    </div>
                    <div class="container">
                        <!-- Sección del perfil -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="d-md-flex align-items-center">
                                            <div class="text-center text-sm-left ">
                                                <div class="avatar avatar-image" style="width: 150px; height:150px">
                                                    <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} " alt="Logo SENA">
                                                </div>
                                            </div>
                                            <div class="text-center text-sm-left m-v-15 p-l-30">
                                                <h2 class="m-b-5">{{ Auth::user()->NombUsua }} {{ Auth::user()->ApelUsua }} </h2>
                                                @if (Auth::user()->FkIdRol == 1)
                                                    <p class="m-b-0 opacity-07">Aprendiz</p>
                                                @endif
                                                @if (Auth::user()->FkIdRol == 2)
                                                    <p class="m-b-0 opacity-07">Instructor</p>
                                                @endif
                                                @if (Auth::user()->FkIdRol == 3)
                                                    <p class="m-b-0 opacity-07">Coordinador</p>
                                                @endif
                                                @if (Auth::user()->FkIdRol == 4)
                                                    <p class="m-b-0 opacity-07">Administrador</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="d-md-block d-none border-left col-1"></div>
                                            <div class="col">
                                                <ul class="list-unstyled m-t-10">
                                                    <li class="row">
                                                        <p class="col-sm-4 col-5 font-weight-semibold text-dark m-b-5">
                                                            <i class="m-r-10 inforPerfil fas fa-birthday-cake"></i>
                                                            <span>Fecha NA: </span>
                                                        </p>
                                                        <p class="col font-weight-semibold"> {{ Auth::user()->FechNaciUsua }}</p>
                                                    </li>
                                                    <li class="row">
                                                        <p class="col-sm-4 col-5 font-weight-semibold text-dark m-b-5">
                                                            <i class="m-r-10 inforPerfil anticon anticon-idcard"></i>
                                                            <span>Identificación: </span>
                                                        </p>
                                                        <p class="col font-weight-semibold"> {{ Auth::user()->TipoDocUsua }} - {{ Auth::user()->NumbDocUsua }}</p>
                                                    </li>
                                                    <li class="row">
                                                        <p class="col-sm-4 col-4 font-weight-semibold text-dark m-b-5">
                                                            <i class="m-r-10 inforPerfil anticon anticon-mail"></i>
                                                            <span>Correo: </span>
                                                        </p>
                                                        <p class="col font-weight-semibold"> {{ Auth::user()->email }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin perfil -->
                    </div>
                </div>
@endsection
