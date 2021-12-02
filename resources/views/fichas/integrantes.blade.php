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
                                        <img src="{{ asset('assets/img/avatars/logo-sena.png') }} " alt="Logo SENA">
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
                    <li class="nav-item dropdown">
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
                            <li class="active">
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

            <!-- Content Wrapper (información del grupo seleccionado) START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Grupos</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                            <a class="breadcrumb-item"
                               href="{{ url('ficha/'.$ficha->IdFicha) }}">Ficha {{$ficha->NumbFich}}</a>
                            <span class="breadcrumb-item active">
                                    {{$grupo->NombGrupo}}
                            </span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    @if (session("mensaje"))
                        <div class="notification-toast top-right" id="notification-toast" data-delay="3000">
                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="alert alert-success m-b-0">
                                    <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h1> {{$grupo->NombGrupo}}</h1>
                            </div>
                            <div class="col-md-1 ml-auto">
                                <a class="btn btn-crear" title="Modificar" href="{{url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo.'/editargrupo')}}">
                                    <i class="anticon anticon-form" title="Modificar"></i>
                                </a>
                            </div>
                        </div>

                        <br>
                        <!-- Descripción y alcance del proyecto -->
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Descripción</h4>
                                <p>
                                    {{$grupo->DescriGrupo}}
                                </p>
                            </div>
                            <div class="col-md-5 ml-auto">
                                <h4>Alcance</h4>
                                <p>
                                    {{$grupo->AlcanGrupo}}
                                </p>
                            </div>
                        </div>
                        <!-- Fin descripcion y alcance -->

                        <br>
                        <br>

                        <!-- Integrantes del grupo de proyecto -->
                        <h4>Integrantes</h4>

                        <div class="row d-flex justify-content-center">
                            @foreach($integrantesGrupo as $integrante)
                                <button class="col-md-3 integrante m-lg-1 btn btn-default" data-toggle="modal" data-target="#desvincular{{$integrante->IdUsua}}"><i class="anticon anticon-check-circle"></i>
                                    {{$integrante->NombUsua}} {{$integrante->ApelUsua}}
                                </button>
                            @endforeach
                        </div>
                        <!-- Fin integrantes -->
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <!-- Sección de los entregables  -->
                        <div class="row">
                            <div class="col-md-2">
                                <h2>Entregables</h2>
                            </div>
                        </div>
                        <!-- Entregables -->
                        <div class="m-t-25 espacios">
                            @foreach ($entregables as $infoEntre)
                                <div class="card" style="max-width: 350px">
                                    <div class="card-body">
                                        <h4>{{ $infoEntre->TituEntre }}</h4>
                                        <p>
                                            {{ $infoEntre->DescEntre }}
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted"><strong>Fase:</strong>

                                                @if ($infoEntre->FkIdFase == 1)
                                                    Análisis de requisitos
                                                @endif
                                                @if ($infoEntre->FkIdFase == 2)
                                                    Diseño del sistema
                                                @endif
                                                @if ($infoEntre->FkIdFase == 3)
                                                    Implementación o Desarrollo
                                                @endif
                                                @if ($infoEntre->FkIdFase == 4)
                                                    Verificación
                                                @endif
                                                @if ($infoEntre->FkIdFase == 5)
                                                    Mantenimiento
                                                @endif

                                            </small>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a class="btn btn-ver-mas"
                                               href="{{ url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo.'/entregable/'.$infoEntre->IdEntre) }}">
                                                <i class="anticon anticon-upload"></i> Subir
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Modal para desvincular a un usuario -->
                    @foreach ($integrantesGrupo as $integrante)
                    <div class="modal fade" id="desvincular{{$integrante->IdUsua}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Desvincular usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="anticon anticon-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <br>
                                    <br>
                                    <i class="anticon anticon-warning display-1 text-warning"></i>
                                    <br>
                                    <br>
                                    <span>¿Desea desvincular a <strong>{{$integrante->NombUsua}}  {{$integrante->ApelUsua}}</strong>?</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <form action="{{url('desvincular/'.$integrante->IdUsua)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="ficha" value="{{$ficha->IdFicha}}">
                                        <input type="hidden" name="grupo" value="{{$grupo->IdGrupo}}">
                                        <input type="submit" class="btn btn-enviar" value="Desvincular">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Content Wrapper (información del grupo seleccionado) END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2021 PROJECTUP. Todos los derechos
                            reservados.</p>
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

    <!-- Cerrar toast js -->
    <script src=" {{ asset('js/toastAlert.js') }} "></script>
</body>

</html>
