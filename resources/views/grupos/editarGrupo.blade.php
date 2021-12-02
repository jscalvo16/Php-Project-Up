<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProjectUp</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/img/logo/icono.svg') }} ">

    <!-- page css -->

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
                                <img src="assets/images/avatars/logo-sena.png" alt="Logo SENA">
                            </div>
                        </div>
                        <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                            <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                <div class="d-flex m-r-50">
                                    <div class="avatar avatar-lg avatar-image">
                                        <img src="assets/images/avatars/logo-sena.png" alt="Logo SENA">
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
                        <a class="dropdown-toggle" href="{{ url('entregable') }}">
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


            <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Grupos</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                            <a class="breadcrumb-item"
                               href="{{ url('ficha/'.$ficha->IdFicha) }}">{{$ficha->NumbFich}}</a>
                            <a class="breadcrumb-item"
                               href="{{ url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo) }}">{{$grupo->NombGrupo}}</a>
                            <span class="breadcrumb-item active">Editar grupo de proyecto</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <h2>Editar grupo de proyecto</h2>
                            </div>
                        </div>
                        <br>
                        <form action="{{url('grupo/'.$grupo->IdGrupo)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <!-- Input Nombre del proyecto -->
                                <div class="form-group col-md-12">
                                    <label for="nombreProyecto"><sup class="obligatorio">*</sup>Nombre
                                        del proyecto</label>
                                    <input type="text" class="form-control" name="nombreProyecto"
                                           id="nombreProyecto" placeholder="Nombre del proyecto"
                                           value="{{$grupo->NombGrupo}}">
                                    <strong
                                        class="text-danger">{{$errors->first('nombreProyecto')}}</strong>
                                </div>

                                <!-- Textarea descripción del proyecto -->
                                <div class="form-group col-md-6">
                                    <label for="descProyecto"><sup class="obligatorio">*</sup>Descripción
                                        del proyecto</label>
                                    <textarea class="form-control textarea" name="descProyecto"
                                              id="descProyecto">{{$grupo->DescriGrupo}}</textarea>
                                    <strong
                                        class="text-danger">{{$errors->first('descProyecto')}}</strong>
                                </div>

                                <!-- Textarea descripción del proyecto -->
                                <div class="form-group col-md-6">
                                    <label for="alcProyecto"><sup class="obligatorio">*</sup>Alcance
                                        del proyecto</label>
                                    <textarea class="form-control textarea" name="alcProyecto"
                                              id="alcProyecto">{{$grupo->AlcanGrupo}}</textarea>
                                    <strong
                                        class="text-danger">{{$errors->first('alcProyecto')}}</strong>

                                </div>

                                <h4 class="col-md-12"><sup class="obligatorio">*</sup>Integrantes
                                </h4>
                                <!-- Select integrante 1 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante1" class="form-control" name="integrante1">

                                        @foreach($integrantesGrupo as $integrante)
                                            <option
                                                value="{{$integrante->IdUsua}}" {{$integrante->FkIdGrupo == $grupo->IdGrupo ? "selected":""}}>{{$integrante->NombUsua}} {{$integrante->ApelUsua}}</option>
                                        @endforeach

                                        @foreach($aprendices as $aprendiz)
                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach
                                        <option value="0">Integrante 1</option>
                                    </select>


                                </div>

                                <!-- Select integrante 2 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante2" class="form-control" name="integrante2">

                                        @foreach($integrantesGrupo as $integrante)
                                            <option
                                                value="{{$integrante->IdUsua}}" {{$integrante->FkIdGrupo == $grupo->IdGrupo ? "selected":""}}>{{$integrante->NombUsua}} {{$integrante->ApelUsua}}</option>
                                        @endforeach

                                        @foreach($aprendices as $aprendiz)
                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach

                                        <option value="0">Integrante 2</option>
                                    </select>


                                </div>

                                <!-- Select integrante 3 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante3" class="form-control" name="integrante3">

                                        @foreach($integrantesGrupo as $integrante)
                                            <option
                                                value="{{$integrante->IdUsua}}" {{$integrante->FkIdGrupo == $grupo->IdGrupo ? "selected":""}}>{{$integrante->NombUsua}} {{$integrante->ApelUsua}} </option>
                                        @endforeach

                                        @foreach($aprendices as $aprendiz)
                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach

                                        <option value="0">Integrante 3</option>
                                    </select>


                                </div>

                                <!-- Select integrante 4 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante4" class="form-control" name="integrante4">

                                        @foreach($integrantesGrupo as $integrante)
                                            <option
                                                value="{{$integrante->IdUsua}}" {{$integrante->FkIdGrupo == $grupo->IdGrupo ? "selected":""}}>{{$integrante->NombUsua}} {{$integrante->ApelUsua}} </option>
                                        @endforeach

                                        @foreach($aprendices as $aprendiz)
                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach

                                        <option value="0">Integrante 4</option>
                                    </select>


                                    <!--Input ID de la ficha-->
                                    <input type="hidden" value="{{$grupo->FkIdFicha}}" name="idFicha">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-enviar" value="Editar">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Content Wrapper END -->

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
