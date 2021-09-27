<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProjectUp</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/img/logo/icono.svg') }} ">

    <!-- data-table css -->
    <link href=" {{ asset('lib/vendors/datatables/dataTables.bootstrap.min.css') }} " rel="stylesheet">

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
                                <a href="nuevaFicha.html">Crear fichas</a>
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


            <!-- Content Wrapper (data table) START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Usuarios</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                            <span class="breadcrumb-item active">Usuarios</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
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
                            @if(session("mensaje"))
                                <strong>{{session("mensaje")}}</strong>
                            @endif
                        </div>
                        <div class="m-t-25">
                            <table id="data-table" class="table">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Tipo documento</th>
                                    <th>Número identificación</th>
                                    <th>Fecha nacimiento</th>
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
                                        <td>{{$usuario -> FechNaciUsua}}</td>
                                        <td>{{$usuario -> CorrUsua}}</td>
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
                                        @if($usuario->EstaUsua ==1)
                                            <td>Activo</td>
                                        @endif
                                        <td>
                                            <a class="btn btn-info" href="{{url('users/'.$usuario->IdUsua.'/edit')}}" title="Modificar">
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
                                    <th>Fecha nacimiento</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                    <th>Rol</th>
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
                                        <form action="#" method="POST">
                                            <div class="form-row">
                                                <!-- Input cargar arcivo -->
                                                <div class="form-group col-md-10">
                                                    <label for="archivo"><sup class="obligatorio">*</sup>Archivo
                                                        (Excel <i
                                                            class="anticon anticon-file-excel text-success"></i>)</label>
                                                    <input type="file" class="form-control" name="archivo"
                                                           id="archivo" placeholder="Archivo Excel">
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
                <div>
                    <!-- Content Wrapper (data table) END -->

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
    </div>
</div>

<!-- Core Vendors JS -->
<script src=" {{ asset('js/vendors.min.js') }} "></script>

<!-- data-table js -->
<script src=" {{ asset('lib/vendors/datatables/jquery.dataTables.min.js') }} "></script>
<script src=" {{ asset('lib/vendors/datatables/dataTables.bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/pages/datatables.js') }} "></script>

<!-- Core JS -->
<script src=" {{ asset('js/app.min.js') }} "></script>

</body>

</html>
