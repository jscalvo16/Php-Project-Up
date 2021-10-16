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
                        <img class="logo-fold" src=" {{ asset('assets/img/logo/icono.svg') }} " alt="Icono ProjectUp" width="60px" height="60px">
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
                                    <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} "  alt="Logo SENA">
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
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="gestionEntregables.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-snippets"></i>
                                </span>
                                <span class="title">Entregables</span>
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


                <!-- Content Wrapper (formulario para crear un espacio de entregable) START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Entregables</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <a class="breadcrumb-item" href="{{ url('entregable') }}">Gestión de entregables</a>
                                <span class="breadcrumb-item active">Crear espacio de entregable</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2>Crear espacio de entregable</h2>
                                </div>
                                <div class="m-r-15 ml-auto">
                                    <i class="anticon anticon-info-circle text-gray infoArchivo" data-toggle="tooltip" data-placement="left" data-html="true" title="Solo se permite la carga de un archivo, si se desea subir más de uno puede subir un comprimido (.zip, .rar) <br> No se permite la carga individual de archivos ejectutables (.php, .java, .cs, .py, .exe, ...) Estos solo se permiten en archivos comprimidos"></i>
                                </div>
                            </div>
                            <br>
                            <form action="{{ url('entregable') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <!-- Input Título del entregable -->
                                    <div class="form-group col-md-12">
                                        <label for="tituloEntre"><sup class="obligatorio">*</sup>Título del entregable</label>
                                        <input type="text" class="form-control" name="tituloEntre" id="tituloEntre" placeholder="Título del entregable">
                                    </div>

                                    <!-- Textarea descripción del proyecto -->
                                    <div class="form-group col-md-6">
                                        <label for="descEntre"><sup class="obligatorio">*</sup>Descripción</label>
                                        <textarea class="form-control textarea" rows="6" cols="30" name="descEntre" id="descEntre"></textarea>
                                    </div>

                                    <!-- Input fecha de inicio -->
                                    <div class="form-group col-md-6">
                                        <label for="fechaInicio"><sup class="obligatorio">*</sup>Fecha de inicio</label>
                                        <input type="date" class="form-control" name="fechaInicio" id="fechaInicio">
                                        <br>
                                        <!-- Input fecha de inicio -->
                                        <label for="fechaFin"><sup class="obligatorio">*</sup>Fecha de cierre</label>
                                        <input type="date" class="form-control" name="fechaFin" id="fechaFin">
                                    </div>

                                    <!-- Select trimestre -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Trimestre</label>
                                        <select id="trimestre" class="form-control" name="trimestre">
                                            <option selected>Elige</option>
                                            <option value="Trimestre I">Trimestre I</option>
                                            <option value="Trimestre II">Trimestre II</option>
                                            <option value="Trimestre III">Trimestre III</option>
                                            <option value="Trimestre IV">Trimestre IV</option>
                                            <option value="Trimestre V">Trimestre V</option>
                                            <option value="Trimestre VI">Trimestre VI</option>
                                            <option value="Trimestre VII">Trimestre VII</option>
                                        </select>
                                    </div>

                                    <!-- Select fases -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Fases de desarrollo</label>
                                        <select class="form-control" name="fases" id="fases">
                                            <option selected>Elige</option>
                                            @foreach ($fases as $fase)
                                                <option value="{{ $fase->IdFase }}">{{ $fase->NombFase }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Select instructores -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Instructor</label>
                                        <select class="form-control" name="instructor" id="instructor">
                                            <option selected>Elige</option>
                                            @foreach ($instructores as $inctructor)
                                                <option value="{{ $inctructor->NombUsua }} {{ $inctructor->ApelUsua }}">
                                                    {{ $inctructor->NombUsua }} {{ $inctructor->ApelUsua }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Input archivo de apoyo -->
                                    <div class="form-group col-md-6">
                                        <label for="archivo"><sup class="obligatorio">*</sup>Adjunto de apoyo</label>
                                        <input type="file" class="form-control" name="archivo" id="archivo" placeholder="Adjunto de apoyo">
                                    </div>

                                    <!-- Select fichas -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Fichas donde se asigna el entregable</label>
                                        <select class="form-control" name="fichas[]" id="fichas" multiple>
                                            <option selected>Elige</option>
                                            @foreach ($fichas as $ficha)
                                                <option value="{{ $ficha->IdFicha }}">
                                                    {{ $ficha->NumbFich }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-enviar" value="Crear">
                            </form>
                        </div>
                    </div>
                    <!-- Content Wrapper (formulario para crear una ficha) END -->

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
