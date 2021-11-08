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


            <!-- Content Wrapper (grupos por ficha) START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Fichas</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                            <span class="breadcrumb-item active">Ficha {{$fich->NumbFich}}</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if (session("mensaje"))
                            <div class="notification-toast top-right" id="notification-toast" data-delay="3000">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="alert alert-success m-b-0">
                                        <button type="button" class="ml-2 close" data-dismiss="toast"
                                                aria-label="Close">
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
                        <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#infoFicha"
                                   role="tab" aria-controls="home-justified" aria-selected="true">Información
                                    general</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#gruposFicha"
                                   role="tab" aria-controls="profile-justified" aria-selected="false">Grupos de
                                    proyecto</a>
                            </li>
                        </ul>

                        <!-- Sección de la información de la ficha -->
                        <div class="tab-content m-t-15" id="myTabContentJustified">
                            <div class="tab-pane fade show active" id="infoFicha" role="tabpanel"
                                 aria-labelledby="home-tab-justified">
                                <div class="row">
                                    <div class="col-md-5">
                                        @foreach($coordinador as $coo)
                                            <h4>Coordinador: {{$coo->NombUsua}} {{$coo->ApelUsua}}</h4>
                                        @endforeach
                                        <h4>Instructores de revisión</h4>
                                        @foreach($instructores as $users)
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">{{$users ->NombUsua}} {{$users -> ApelUsua}}</li>
                                            </ul>
                                        @endforeach
                                    </div>

                                    <div class="col-md-3 ml-auto">
                                        <h5>Inicio etapa lectiva: <br>{{$fich->InicEtapElec}}</h5>
                                        <h5>Fin etapa lectiva: <br>{{$fich->FinEtapElec}}</h5>
                                        <h5>Jornada: {{$fich->JornFicha}}</h5>
                                        <h5>{{$fich->Trimestre}}</h5>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h4>Aprendices</h4>
                                    </div>
                                    <!-- Crear grupo y entregables (botones) -->
                                    <div class="col-md-2 ml-auto">
                                        <button class="btn btn-crear" data-toggle="modal" data-target=".modal-grupo">
                                            <i class="anticon anticon-plus"></i> Crear grupo
                                        </button>
                                    </div>
                                </div>
                                <div class="m-t-25">
                                    <table id="data-table" class="table">
                                        <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Número identificación</th>
                                            <th>Fecha nacimiento</th>
                                            <th>Correo</th>
                                            <th>Estado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($aprendices as $internos)
                                            <tr>
                                                <td>{{$internos->NombUsua}}</td>
                                                <td>{{$internos->ApelUsua}}</td>
                                                <td>{{$internos->NumbDocUsua}}</td>
                                                <td>{{$internos->FechNaciUsua}}</td>
                                                <td>{{$internos->email}}</td>
                                                @if($internos->EstaUsua == 1)
                                                    <td>Activo</td>
                                                @elseif($internos->EstaUsua == 0)
                                                    <td>Inactivo</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Número identificación</th>
                                            <th>Fecha nacimiento</th>
                                            <th>Correo</th>
                                            <th>Estado</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- Fin información general de la ficha -->


                            <!-- Sección de los grupos de proyecto  -->
                            <div class="tab-pane fade" id="gruposFicha" role="tabpanel"
                                 aria-labelledby="profile-tab-justified">
                                <!-- Grupos -->
                                <div class="m-t-25 grupos">
                                    @if($gruposFicha==null)

                                        <h3>Grupos sin asignar</h3>


                                    @elseif($gruposFicha!= null)

                                        @foreach($gruposFicha as $grupos)

                                            <div class="card" style="max-width: 350px">
                                                <div class="card-body">
                                                    <h4>{{$grupos->NombGrupo}}</h4>
                                                    <p>
                                                        {{$grupos->DescriGrupo}}
                                                    </p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-right">
                                                        <a class="btn btn-ver-mas"
                                                           href="{{url('ficha/'.$fich->IdFicha.'/grupo/'.$grupos->IdGrupo)}}">Ver
                                                            mas</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <!-- Fin grupos de proyecto -->

                            <!-- Modales -->
                            <!-- Formulario modal para crear un grupo de proyecto -->
                            <div class="modal fade modal-grupo" id="modalGrupos">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title" id="modalGruposLabel">Crear un grupo de
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
                                                               id="nombreProyecto" placeholder="Nombre del proyecto">
                                                        <strong
                                                            class="text-danger">{{$errors->first('nombreProyecto')}}</strong>
                                                    </div>

                                                    <!-- Textarea descripción del proyecto -->
                                                    <div class="form-group col-md-6">

                                                        <label for="descProyecto"><sup class="obligatorio">*</sup>Descripción
                                                            del proyecto</label>
                                                        <textarea class="form-control textarea" name="descProyecto"
                                                                  id="descProyecto"></textarea>
                                                        <strong
                                                            class="text-danger">{{$errors->first('descProyecto')}}</strong>

                                                    </div>

                                                    <!-- Textarea descripción del proyecto -->
                                                    <div class="form-group col-md-6">

                                                        <label for="alcProyecto"><sup class="obligatorio">*</sup>Alcance
                                                            del proyecto</label>
                                                        <textarea class="form-control textarea" name="alcProyecto"
                                                                  id="alcProyecto"></textarea>
                                                        <strong
                                                            class="text-danger">{{$errors->first('alcProyecto')}}</strong>

                                                    </div>

                                                    <h4 class="col-md-12"><sup class="obligatorio">*</sup>Integrantes
                                                    </h4>
                                                    <!-- Select integrante 1 -->
                                                    <div class="form-group col-md-6">
                                                        <select id="integrante1" class="form-control"
                                                                name="integrante1">
                                                            <option selected value="0">Integrante 1</option>
                                                            @foreach($aprendices as $aprendiz)
                                                                @if($aprendiz->FkIdGrupo==null)
                                                                    <option value="{{$aprendiz->IdUsua}}">
                                                                        {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @if(session('message'))
                                                            <strong class="text-danger">{{session('message')}}</strong>
                                                        @endif
                                                    </div>

                                                    <!-- Select integrante 2 -->
                                                    <div class="form-group col-md-6">
                                                        <select id="integrante2" class="form-control"
                                                                name="integrante2">
                                                            <option selected>Integrante 2</option>
                                                            @foreach($aprendices as $aprendiz)
                                                                @if($aprendiz->FkIdGrupo==null)
                                                                    <option value="{{$aprendiz->IdUsua}}">
                                                                        {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                                    </option>

                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @if(session('message'))
                                                            <strong class="text-danger">{{session('message')}}</strong>
                                                        @endif
                                                    </div>

                                                    <!-- Select integrante 3 -->
                                                    <div class="form-group col-md-6">
                                                        <select id="integrante3" class="form-control"
                                                                name="integrante3">
                                                            <option selected>Integrante 3</option>
                                                            @foreach($aprendices as $aprendiz)

                                                                @if($aprendiz->FkIdGrupo==null)
                                                                    <option value="{{$aprendiz->IdUsua}}">
                                                                        {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @if(session('message'))
                                                            <strong class="text-danger">{{session('message')}}</strong>
                                                        @endif
                                                    </div>

                                                    <!-- Select integrante 4 -->
                                                    <div class="form-group col-md-6">
                                                        <select id="integrante4" class="form-control"
                                                                name="integrante4">
                                                            <option selected>Integrante 4</option>
                                                            @foreach($aprendices as $aprendiz)

                                                                @if($aprendiz->FkIdGrupo==null)
                                                                    <option value="{{$aprendiz->IdUsua}}">
                                                                        {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @if(session('message'))
                                                            <strong class="text-danger">{{session('message')}}</strong>
                                                        @endif

                                                    <!--Input ID de la ficha-->
                                                        <input type="hidden" value="{{$fich->IdFicha}}" name="idFicha">
                                                    </div>
                                                    <strong class="text-danger">{{$errors->first('integrante1')}}</strong>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-cerrar-modal"
                                                            data-dismiss="modal">Cerrar
                                                    </button>
                                                    <input type="submit" class="btn btn-crear" name="crearGrupo" value="Crear">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <script>
                                        $('#modalGrupos').modal('show');
                                    </script>
                                @endif
                            </div>
                            <!-- Fin formulario modal para crear un grupo de proyecto -->
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper (ficha en general) END -->

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
