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
                                    <img src="{{ asset('assets/img/avatars/logo-sena.png') }}"  alt="Logo SENA">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div>
                                            <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->NombUsua }} {{ Auth::user()->ApelUsua }}</p>
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
                                <a href="{{ url('perfil') }}" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Perfil</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{url('logout')}}" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10" >Cerrar sesi??n</span>
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
                        @if ( Auth::user()->FkIdRol == 4 )
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{url('users')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user"></i>
                                </span>
                                <span class="title">Usuarios</span>
                            </a>
                        </li>
                        @endif
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
                                    @if ( Auth::user()->FkIdRol == 4 || Auth::user()->FkIdRol == 3 || Auth::user()->FkIdRol == 2 )
                                    <li>
                                        <a href="{{url('ficha')}}">Gesti??n de fichas</a>
                                    </li>
                                    @endif
                                    @foreach($fichas as $f)
                                    <li>
                                        <a href="{{url('ficha/'.$f->IdFicha)}}">{{$f->NumbFich}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </a>
                        </li>
                        @if ( Auth::user()->FkIdRol == 4 || Auth::user()->FkIdRol == 3 )
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{url('asignacion')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-usergroup-add"></i>
                                </span>
                                <span class="title">Asignaci??n</span>
                            </a>
                        </li>
                        @endif
                        @if ( Auth::user()->FkIdRol == 2 || Auth::user()->FkIdRol == 3 )
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ url('entregable') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-snippets"></i>
                                </span>
                                <span class="title">Entregables</span>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{url('avance')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file-done"></i>
                                </span>
                                <span class="title">Avances</span>
                            </a>
                        </li>
                        @if (Auth::user()->FkIdRol == 2)
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{url('reportes')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-snippets"></i>
                                </span>
                                <span class="title">Reportes</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">


                <!-- Content Wrapper START -->
                @yield('contenido')
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright ?? 2021 PROJECTUP. Todos los derechos reservados.</p>
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

<!-- data-table js -->
<script src=" {{ asset('lib/vendors/datatables/jquery.dataTables.min.js') }} "></script>
<script src=" {{ asset('lib/vendors/datatables/dataTables.bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/pages/datatables.js') }} "></script>

<!-- Core JS -->
<script src=" {{ asset('js/app.min.js') }} "></script>

<!-- Cerrar toast js -->
<script src=" {{ asset('js/toastAlert.js') }} "></script>

</body>
</html>
