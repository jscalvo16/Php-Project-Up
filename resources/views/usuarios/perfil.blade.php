@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Usuarios</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inico</a>
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
                                                <h2 class="m-b-5">Nicolas Rosero</h2>
                                                <p class="text-opacity font-size-13">Aprendiz</p>
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
                                                        <p class="col font-weight-semibold"> 23/10/2003</p>
                                                    </li>
                                                    <li class="row">
                                                        <p class="col-sm-4 col-5 font-weight-semibold text-dark m-b-5">
                                                            <i class="m-r-10 inforPerfil anticon anticon-idcard"></i>
                                                            <span>Identificación: </span>
                                                        </p>
                                                        <p class="col font-weight-semibold"> T.I. - 1000856839</p>
                                                    </li>
                                                    <li class="row">
                                                        <p class="col-sm-4 col-4 font-weight-semibold text-dark m-b-5">
                                                            <i class="m-r-10 inforPerfil anticon anticon-mail"></i>
                                                            <span>Correo: </span>
                                                        </p>
                                                        <p class="col font-weight-semibold"> nrosero93@misena.edu.co</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin perfil -->

                        <!-- Sección cambio contraseña -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>Cambiar contraseña</h2>
                                    </div>
                                    <!-- Formulario -->
                                    <div class="col-md-12">
                                        <form action="#" method="POST">
                                            <div class="form-row">
                                                <!-- Input contraseña existente -->
                                                <div class="form-group col-md-6">
                                                    <label for="passExistente"><sup class="obligatorio">*</sup>Contraseña antigua</label>
                                                    <input type="password" class="form-control" name="passExistente" id="passExistente" placeholder="Contraseña antigua">
                                                </div>

                                                <!-- Input contraseña nueva -->
                                                <div class="form-group col-md-6">
                                                    <label for="passNueva"><sup class="obligatorio">*</sup>Contraseña nueva</label>
                                                    <input type="password" class="form-control" name="passNueva" id="passNueva" placeholder="Contraseña nueva">
                                                </div>

                                                <!-- Input confirmar contraseña -->
                                                <div class="form-group col-md-6">
                                                    <label for="confirmPass"><sup class="obligatorio">*</sup>Confirmar contraseña</label>
                                                    <input type="password" class="form-control" name="confirmPass" id="confirmPass" placeholder="Confirmar contraseña">
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-enviar" value="Cambiar">
                                        </form>
                                    </div>
                                    <!-- Fin formularios -->
                                </div>
                            </div>
                        </div>
                        <!-- Fin cambio contraseña -->
                    </div>
                </div>
@endsection
