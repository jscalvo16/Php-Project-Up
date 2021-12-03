@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Fichas</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
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
                                        <a class="btn btn-crear" href="{{url('ficha/'.$fich->IdFicha.'/creargrupo')}}">
                                            <i class="anticon anticon-plus"></i> Crear grupo
                                        </a>
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
                        </div>
                    </div>
                </div>
            </div>
@endsection
