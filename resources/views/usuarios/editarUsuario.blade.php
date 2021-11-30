<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProjectUp</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/img/logo/icono.svg') }} ">

    <!-- Core css -->
    <link href=" {{ asset('css/app.min.css') }} " rel="stylesheet">

</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        <div class="header">
            <div class="logo logo-dark">
                <a href="index.html">
                    <img src=" {{ asset('assets/img/logo/logo-medio.svg') }} " alt="Logo ProjectUp">
                    <img class="logo-fold" src=" {{ asset('assets/img/logo/icono.svg') }} " alt="Icono ProjectUp"
                         width="60px" height="60px">
                </a>
            </div>
            <div class="logo logo-white">
                <a href="index.html">
                    <img src=" {{ asset('assets/img/logo/logo-medio-blanco.svg') }} " alt="Logo ProjectUp">
                    <img class="logo-fold" src=" {{ asset('assets/img/logo/icono.svg') }} " alt="Icono ProjectUp">
                </a>
            </div>
            <div class="nav-wrap">
                <ul class="nav-left">
                    <li class="desktop-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                    <li class="mobile-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="dropdown dropdown-animated scale-left">
                        <div class="pointer" data-toggle="dropdown">
                            <div class="avatar avatar-image  m-h-10 m-r-15">
                                <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} " alt="Logo SENA">
                            </div>
                        </div>
                        <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                            <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                <div class="d-flex m-r-50">
                                    <div class="avatar avatar-lg avatar-image">
                                        <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} " alt="Logo SENA">
                                    </div>
                                    <div class="m-l-10">
                                        <p class="m-b-0 text-dark font-weight-semibold">Nicolas Rosero</p>
                                        <p class="m-b-0 opacity-07">UI/UX Desinger</p>
                                    </div>
                                </div>
                            </div>
                            <a href="perfil.html" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                        <span class="m-l-10">Perfil</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                        <span class="m-l-10">Cerrar sesión</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <div class="side-nav">
            <div class="side-nav-inner">
                <ul class="side-nav-menu scrollable">
                    <li class="nav-item dropdown open">
                        <a class="dropdown-toggle" href="usuarios.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user"></i>
                                </span>
                            <span class="title">Usuarios</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-folder"></i>
                                </span>
                            <span class="title">Fichas</span>
                            <span class="arrow">
									<i class="arrow-icon"></i>
								</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="gestionFichas.html">Gestión de fichas</a>
                            </li>
                            <li>
                                <a href="fichas.html">2242753</a>
                            </li>
                            <li>
                                <a href="#">2242745</a>
                            </li>
                            <li>
                                <a href="#">2242742</a>
                            </li>
                            <li>
                                <a href="#">2242756</a>
                            </li>
                        </ul>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="asignarUsuarios.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-usergroup-add"></i>
                                </span>
                            <span class="title">Asignación</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="avances.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file-done"></i>
                                </span>
                            <span class="title">Avances</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="reportes.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-snippets"></i>
                                </span>
                            <span class="title">Reportes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">


            <!-- Content Wrapper (formulario) START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Usuarios</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
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
                                        <option selected value="{{$usuario->TipoDocUsua}}">Elige</option>
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
                                           placeholder="Número de identificación" value="{{$usuario->NumbDocUsua}}">
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
                <!-- Content Wrapper (formulario) END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2021 PROJECTUP. Todos los derechos reservados.</p>
                        <span>
                                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src=" {{ asset('js/vendors.min.js') }} "></script>

    <!-- Core JS -->
    <script src=" {{ asset('js/app.min.js') }} "></script>
</body>

</html>
