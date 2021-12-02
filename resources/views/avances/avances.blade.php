<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProjectUp</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/img/logo/icono.svg') }}">

    <!-- Core css -->
    <link href=" {{ asset('css/app.min.css') }}" rel="stylesheet">

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
                                <span class="breadcrumb-item active">Documentos</span>
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
                                <div class="col-md-2">
                                    <h1>Avances</h1>
                                </div>
                                <div class="col-md-5 ml-auto">
                                    <form>
                                        <div class="form-row">
                                            <!-- Fichas para el filtro -->
                                            <div class="form-group col-md-5 ml-auto">
                                                <label>Fichas</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Elige</option>
                                                    <option>Fichas para el filtro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="file-manager-content-body">
                            <div class="file-manager-content-files avances">
                                <!-- Archivos de avances -->
                                @foreach ( $avances as $avan )
                                <div class="card" style="max-width: 350px;">
                                    <div class="card-body file-manager-content-body">
                                        <div class="file-manager-content-details">
                                            <div class="content-details">
                                                <div class="d-flex justify-content-between align-items-center border-bottom">
                                                    <h4 class="m-b-5">{{ $avan->ArchAvan }}</h4>
                                                    <button class="btn btn-icon m-b-5" title="Descargar">
                                                        <a class="text-gray h3" href="{{ url('descargarAvance/'.$avan->IdAvan) }}" title="Descargar">
                                                            <i class="anticon anticon-download" title="Descargar"></i>
                                                        </a>
                                                    </button>
                                                </div>
                                                <div class="m-t-70">
                                                    <div class="d-flex justify-content-around display-1 align-items-center content-details-file">
                                                        @if (str_ends_with($avan->ArchAvan , '.docx'))
                                                            <i class="anticon anticon-file-word text-primary"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.doc'))
                                                            <i class="anticon anticon-file-word text-primary"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.docm'))
                                                            <i class="anticon anticon-file-word text-primary"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.xls'))
                                                            <i class="anticon anticon-file-excel text-success"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.xlsm'))
                                                            <i class="anticon anticon-file-excel text-success"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.xlsx'))
                                                            <i class="anticon anticon-file-excel text-success"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.pptx'))
                                                            <i class="anticon anticon-file-ppt text-warning"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.ppt'))
                                                            <i class="anticon anticon-file-ppt text-warning"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.pdf'))
                                                            <i class="anticon anticon-file-pdf text-danger"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.zip'))
                                                            <i class="anticon anticon-hdd text-secondary"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.rar'))
                                                            <i class="anticon anticon-hdd text-secondary"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.jpeg'))
                                                            <i class="anticon anticon-file-jpg text-info"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.jpg'))
                                                            <i class="anticon anticon-file-jpg text-info"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.png'))
                                                            <i class="anticon anticon-file-jpg text-info"></i>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.txt'))
                                                            <i class="anticon anticon-file-text text-muted"></i>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="nav nav-tabs nav-justified m-t-40">
                                                    <h5>Detalles</h5>
                                                </div>
                                                <div class="p-h-25 p-v-15">
                                                    <dl class="row m-b-5">
                                                        <dt class="col-5 text-dark">Tipo:</dt>
                                                        @if (str_ends_with($avan->ArchAvan , '.docx'))
                                                            <dd class="col-7">Word</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.doc'))
                                                            <dd class="col-7">Word</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.docm'))
                                                            <dd class="col-7">Word</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.xls'))
                                                            <dd class="col-7">Excel</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.xlsm'))
                                                            <dd class="col-7">Excel</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.xlsx'))
                                                            <dd class="col-7">Excel</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.pptx'))
                                                            <dd class="col-7">Power Point</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.ppt'))
                                                            <dd class="col-7">Power Point</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.pdf'))
                                                            <dd class="col-7">PDF</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.zip'))
                                                            <dd class="col-7">ZIP</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.rar'))
                                                            <dd class="col-7">RAR</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.jpeg'))
                                                            <dd class="col-7">Imagen</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.jpg'))
                                                            <dd class="col-7">Imagen</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.png'))
                                                            <dd class="col-7">Imagen</dd>
                                                        @endif
                                                        @if (str_ends_with($avan->ArchAvan , '.txt'))
                                                            <dd class="col-7">Texto</dd>
                                                        @endif
                                                    </dl>
                                                    <dl class="row m-b-5">
                                                        <dt class="col-5 text-dark">Subido:</dt>
                                                        <dd class="col-7">{{ $avan->FechAvan }}</dd>
                                                    </dl>
                                                    <dl class="row m-b-5">
                                                        <dt class="col-5 text-dark">Ficha:</dt>
                                                        <dd class="col-7">{{ $avan->NumbFich }}</dd>
                                                    </dl>
                                                    <dl class="row m-b-5">
                                                        <dt class="col-5 text-dark">Descripción:</dt>
                                                        @if ($avan->DescAvan == NULL)
                                                            <dd class="col-7">Sin descripción</dd>
                                                        @elseif ($avan->DescAvan)
                                                            <dd class="col-7">{{ $avan->DescAvan }}</dd>
                                                        @endif
                                                    </dl>
                                                    <dl class="row m-b-5">
                                                        <dt class="col-5 text-dark">Grupo:</dt>
                                                        <dd class="col-7">{{ $avan->NombGrupo }}</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Footer de la tarjeta -->
                                    <div class="card-footer">
                                        <div class="row">
                                            <a class="btn btn-cerrar-modal col-md-7" href="{{ url('observacion/'.$avan->IdAvan) }}">Observaciones</a>
                                            <a class="btn btn-ver-mas col-md-2 ml-auto" href="{{ url('ficha/'.$avan->FkIdFicha.'/grupo/'.$avan->IdGrupo.'/entregable/'.$avan->FkIdEntre) }}" title="Ver más">
                                                <i class="anticon anticon-plus" title="Ver más"></i>
                                            </a>
                                            <a class="btn btn-info col-md-2" href="{{ url('avance/'.$avan->IdAvan.'/edit') }}" title="Modificar">
                                                <i class="anticon anticon-form" title="Modificar"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Fin archivos de avances -->
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

    <!-- Core JS -->
    <script src=" {{ asset('js/app.min.js') }} "></script>

    <!-- Cerrar toast js -->
    <script src=" {{ asset('js/toastAlert.js') }} "></script>
</body>

</html>
