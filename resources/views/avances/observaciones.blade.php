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
                        <h2 class="header-title">Avances</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <a class="breadcrumb-item" href="avances.html">Documentos</a>
                                <span class="breadcrumb-item active">Análisis de requisitos</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="chat chat-app row">
                                <!-- Sección del archivo -->
                                <div class="chat-list">
                                    <div class="card">
                                        <div class="card-body file-manager-content-body">
                                            <div class="file-manager-content-details">
                                                <div class="content-details">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center border-bottom">
                                                        <h3 class="m-b-5">Requisitos.docx</h3>
                                                    </div>
                                                    <div class="m-t-70">
                                                        <div
                                                            class="d-flex justify-content-around display-1 align-items-center content-details-file">
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
                                                            <dt class="col-5 text-dark">Ficha:</dt>
                                                            <dd class="col-7">2242753</dd>
                                                        </dl>
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Descripción:</dt>
                                                            <dd class="col-7">Requisitos funcionales y requisitos no
                                                                funcionales</dd>
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

                                <!-- Sección del chat Observación-Respuesta -->
                                <div class="chat-content">
                                    <div class="conversation">
                                        <div class="conversation-wrapper">
                                            <div class="conversation-header justify-content-between">
                                                <div class="media align-items-center">
                                                    <a href="javascript:void(0);"
                                                        class="chat-close m-r-20 d-md-none d-block text-dark font-size-18 m-t-5">
                                                        <i class="anticon anticon-left-circle"></i>
                                                    </a>
                                                    <div class="avatar avatar-image">
                                                        <img src="assets/images/avatars/logo-sena.png"
                                                            alt="Logo SENA">
                                                    </div>
                                                    <div class="p-l-15">
                                                        <h6 class="m-b-0">Erin Gonzales</h6>
                                                        <p class="m-b-0 text-muted font-size-13 m-b-0">
                                                            <span>Instructor</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-body">
                                                <div class="msg justify-content-center">
                                                    <div class="font-weight-semibold font-size-12"> 7:57PM
                                                    </div>
                                                </div>
                                                <div class="msg msg-recipient">
                                                    <div class="m-r-10">
                                                        <div class="avatar avatar-image">
                                                            <img src=" {{ asset('assets/img/avatars/logo-sena.png') }}"
                                                                alt="Logo SENA">
                                                        </div>
                                                    </div>
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>Falto la portada...</span>
                                                        </div>
                                                        <small class="text-muted">Erin Gonzales</small>
                                                    </div>
                                                </div>
                                                <div class="msg msg-sent">
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>Ya lo corregimos instructor</span>
                                                        </div>
                                                        <small class="text-muted">Nicolas Rosero</small>
                                                    </div>
                                                </div>
                                                <div class="msg msg-recipient">
                                                    <div class="m-r-10">
                                                        <div class="avatar avatar-image">
                                                            <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} "
                                                                alt="Logo SENA">
                                                        </div>
                                                    </div>
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>Vale</span>
                                                        </div>
                                                        <small class="text-muted">Erin Gonzales</small>
                                                    </div>
                                                </div>
                                                <div class="msg msg-sent">
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>Listo, documento actualizado</span>
                                                        </div>
                                                        <small class="text-muted">Juan Sebastian calvo</small>
                                                    </div>
                                                </div>
                                                <div class="msg msg-recipient">
                                                    <div class="m-r-10">
                                                        <div class="avatar avatar-image">
                                                            <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} "
                                                                alt="Logo SENA">
                                                        </div>
                                                    </div>
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>Listo, muy buen trabajo</span>
                                                        </div>
                                                        <small class="text-muted">Erin Gonzales</small>
                                                    </div>
                                                </div>
                                                <div class="msg msg-sent">
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>Gracias instructor</span>
                                                        </div>
                                                        <small class="text-muted">Nicolas Rosero</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-footer">
                                                <input class="chat-input" type="text"
                                                    placeholder="Mensaje">
                                                <ul class="list-inline d-flex align-items-center m-b-0">
                                                    <li class="list-inline-item">
                                                        <a class="d-none d-md-block btn btn-enviar" href="#" title="Enviar">
                                                            <i class="far fa-paper-plane"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            class="text-gray font-size-20 d-md-none d-block">
                                                            <i class="far fa-paper-plane"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin chat -->

                            </div>
                        </div>
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

    <!-- Page js -->
    <script src=" {{ asset('js/pages/chat.js') }} "></script>
    <!-- Core JS -->
    <script src=" {{ asset('js/app.min.js') }} "></script>
</body>

</html>
