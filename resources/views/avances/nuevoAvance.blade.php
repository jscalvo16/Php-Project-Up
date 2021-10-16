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
                        <img class="logo-fold" src=" {{ asset('assets/img/logo/icono.svg') }} " alt="Icono ProjectUp"  width="60px" height="60px">
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
                                    <a href="nuevaFicha.html">Crear fichas</a>
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


                <!-- Content Wrapper (subir un avance) START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Grupos</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <a class="breadcrumb-item" href="fichas.html">Ficha 2242753</a>
                                <a class="breadcrumb-item" href="integrantes.html">S.I. Para la gestión de residentes en el CR La Aurora</a>
                                <span class="breadcrumb-item active">Análisis de requisitos</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h1>Análisis de requisitos</h1>
                            <br>
                            <!-- Descripción completa del entregable -->
                            <div class="row ">
                                <div class="col-md-5">
                                    <h4>Descripción</h4>
                                    <p>
                                        Subir un documento con los requisitos que han propuesto durante el levantamiento de información.
                                    </p>
                                </div>
                                <div class="col-md-5 ml-auto">
                                    <h5>Fase de desarrollo</h5>
                                    <p>
                                        Análisis de requisitos
                                    </p>
                                    <h5>Fecha de creación del espacio</h5>
                                    <p>
                                        24/03/2020
                                    </p>
                                    <h5>Fecha de cierre del espacio</h5>
                                    <p>
                                        05/04/2020
                                    </p>
                                </div>
                            </div>
                            <!-- Fin descripción completa -->

                            <br>
                            <br>
                            <br>

                            <!-- Sección del formulario para subir el avance -->
                            <div class="row">
                                <!-- Sección del formulario-->
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h2>Subir avance</h2>
                                                </div>
                                                <div class="col-md-1 ml-auto">
                                                    <i class="anticon anticon-info-circle text-gray infoArchivo" data-toggle="tooltip" data-placement="left" data-html="true" title="Solo se permite la carga de un archivo, si se desea subir más de uno puede subir un comprimido (.zip, .rar) <br> No se permite la carga individual de archivos ejectutables (.php, .java, .cs, .py, ...) Estos solo se permiten en archivos comprimidos"></i>
                                                </div>
                                            </div>
                                            <form action="#" method="POST">
                                                <div class="form-row">
                                                    <!-- Textarea descripción del avance -->
                                                    <div class="form-group col-md-7">
                                                        <label for="descAvance"><sup class="obligatorio">*</sup>Descripción del documento</label>
                                                        <textarea class="form-control textarea" rows="6" cols="30" name="descAvance" id="descAvance"></textarea>
                                                    </div>

                                                    <!-- Input para subir el avance -->
                                                    <div class="form-group col-md-8">
                                                        <label for="avance"><sup class="obligatorio">*</sup>Avance</label>
                                                        <input type="file" class="form-control" name="avance" id="avance" placeholder="Documento de evidencia">
                                                    </div>
                                                </div>
                                                <input type="submit" class="btn btn-enviar" value="Subir">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin formulario -->

                                <!-- Sección del archivo -->
                                <div class="col-md-4 ml-auto">
                                    <div class="card">
                                        <div class="card-body file-manager-content-body">
                                            <div class="file-manager-content-details">
                                                <div class="content-details">
                                                    <div class="d-flex justify-content-between align-items-center border-bottom">
                                                        <h3 class="m-b-5">Requisitos.docx</h3>
                                                        <button class="btn btn-icon m-b-5" title="Descargar">
                                                            <a class="text-gray h3" title="Descargar" href="#">
                                                                <i class="anticon anticon-download"></i>
                                                            </a>
                                                        </button>
                                                    </div>
                                                    <div class="m-t-70">
                                                        <div class="d-flex justify-content-around display-1 align-items-center content-details-file">
                                                            <i class="anticon anticon-file-word text-primary"></i>
                                                        </div>
                                                    </div>
                                                    <div class="nav nav-tabs nav-justified m-t-40">
                                                        <h5>Detalles</h5>
                                                    </div>
                                                    <div class="p-h-25 p-v-15">
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Tipo:</dt>
                                                            <dd class="col-7">word</dd>
                                                        </dl>
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Subido:</dt>
                                                            <dd class="col-7">30/04/2020</dd>
                                                        </dl>
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Descripción:</dt>
                                                            <dd class="col-7">Requisitos funcionales y requisitos no funcionales</dd>
                                                        </dl>
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Grupo:</dt>
                                                            <dd class="col-7">S.I. Para la gestión de residentes en el CR La Aurora</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin archivo -->
                            </div>
                        </div>
                    </div>
                    <!-- Content Wrapper (subir un avance) END -->

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
