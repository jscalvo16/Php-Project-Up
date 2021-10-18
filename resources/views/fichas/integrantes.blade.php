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
                            <a class="breadcrumb-item" href="fichas.html">Ficha {{$grupo->FkIdFicha}}</a>
                            <span class="breadcrumb-item active">
                                    {{$grupo->NombGrupo}}
                                </span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h1> {{$grupo->NombGrupo}}</h1>
                            </div>
                            <div class="col-md-1 ml-auto">
                                <button class="btn btn-crear" data-toggle="modal" data-target=".modal-grupo"
                                        title="Modificar">
                                    <i class="anticon anticon-form" title="Modificar"></i>
                                </button>
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

                                <p class="col-md-3 integrante"><i class="anticon anticon-check-circle"></i>
                                    {{$integrante->NombUsua}} {{$integrante->ApelUsua}}
                                </p>
                            @endforeach
                        </div>
                        <!-- Fin integrantes -->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- Sección de los entregables  -->
                        <h2>Entregables</h2>
                        <!-- Entregables -->
                        <div class="m-t-25 espacios">
                            <div class="card" style="max-width: 350px">
                                <div class="card-body">
                                    <h4>Análisis de requisitos</h4>
                                    <p>
                                        Subir un documento con los requisitos que han propuesto durante el levantamiento
                                        de información.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted"><strong>Fase:</strong> Análisis de requisitos</small>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a class="btn btn-ver-mas" href="nuevoAvance.html"><i
                                                class="anticon anticon-upload"></i> Subir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="max-width: 350px">
                                <div class="card-body">
                                    <h4>Análisis de de Stakeholders</h4>
                                    <p>
                                        Subir un documento con los Stakeholders encontrados y analizados junto con las
                                        posibles funciones de cada uno.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted"><strong>Fase:</strong> Análisis de requisitos</small>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a class="btn btn-ver-mas" href="nuevoAvance.html"><i
                                                class="anticon anticon-upload"></i> Subir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="max-width: 350px">
                                <div class="card-body">
                                    <h4>Revisión de informe</h4>
                                    <p>
                                        Subir el informe del proyecto con: Introduccón, alcance, requisitos funcionales
                                        y no funcionales y Stakeholders.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted"><strong>Fase:</strong> Análisis de requisitos</small>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a class="btn btn-ver-mas" href="nuevoAvance.html"><i
                                                class="anticon anticon-upload"></i> Subir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin entregables -->

                        <!-- Modales -->
                        <!-- Formulario modal para crear un grupo de proyecto -->
                        <div class="modal fade modal-grupo" id="modalGrupos">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="modalGruposLabel">Modficar un grupo de
                                            proyecto</h1>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('grupo')}}" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <!-- Input Nombre del proyecto -->
                                                <div class="form-group col-md-12">
                                                    <label for="nombreProyecto"><sup class="obligatorio">*</sup>Nombre
                                                        del proyecto</label>
                                                    <input type="text" class="form-control" name="nombreProyecto"
                                                           id="nombreProyecto" placeholder="Nombre del proyecto" value="{{$grupo->NombGrupo}}">
                                                </div>

                                                <!-- Textarea descripción del proyecto -->
                                                <div class="form-group col-md-6">
                                                    <label for="descProyecto"><sup class="obligatorio">*</sup>Descripción
                                                        del proyecto</label>
                                                    <textarea class="form-control textarea" name="descProyecto"
                                                              id="descProyecto" >{{$grupo->DescriGrupo}}</textarea>
                                                </div>

                                                <!-- Textarea descripción del proyecto -->
                                                <div class="form-group col-md-6">
                                                    <label for="alcProyecto"><sup class="obligatorio">*</sup>Alcance
                                                        del proyecto</label>
                                                    <textarea class="form-control textarea" name="alcProyecto"
                                                              id="alcProyecto" >{{$grupo->AlcanGrupo}}</textarea>
                                                </div>

                                                <h4 class="col-md-12"><sup class="obligatorio">*</sup>Integrantes
                                                </h4>
                                                <!-- Select integrante 1 -->
                                                <div class="form-group col-md-6">
                                                    <select id="integrante1" class="form-control" name="integrante1">
                                                        <option selected>Integrante 1</option>

                                                    </select>
                                                </div>

                                                <!-- Select integrante 2 -->
                                                <div class="form-group col-md-6">
                                                    <select id="integrante2" class="form-control" name="integrante2">
                                                        <option selected>Integrante 2</option>

                                                    </select>
                                                </div>

                                                <!-- Select integrante 3 -->
                                                <div class="form-group col-md-6">
                                                    <select id="integrante3" class="form-control" name="integrante3">
                                                        <option selected>Integrante 3</option>

                                                    </select>
                                                </div>

                                                <!-- Select integrante 4 -->
                                                <div class="form-group col-md-6">
                                                    <select id="integrante4" class="form-control" name="integrante4">
                                                        <option selected>Integrante 4</option>

                                                    </select>
                                                    <!--Input ID de la ficha-->
                                                    <input type="hidden" value="{{$grupo->FkIdFicha}}" name="idFicha">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-cerrar-modal"
                                                        data-dismiss="modal">Cerrar
                                                </button>
                                                <input type="submit" class="btn btn-crear" value="Crear">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin formulario modal para crear un grupo de proyecto -->


                    </div>
                </div>

                <!-- Content Wrapper (información del grupo seleccionado) END -->

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
