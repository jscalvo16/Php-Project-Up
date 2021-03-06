@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Grupos</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
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
                            @if ( Auth::user()->FkIdRol == 2 )
                            <div class="col-md-1 ml-auto">
                                <a class="btn btn-crear" title="Modificar" href="{{url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo.'/editargrupo')}}">
                                    <i class="anticon anticon-form" title="Modificar"></i>
                                </a>
                            </div>
                            @endif
                        </div>

                        <br>
                        <!-- Descripci??n y alcance del proyecto -->
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Descripci??n</h4>
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
                            @if ( Auth::user()->FkIdRol == 2 )
                            @foreach($integrantesGrupo as $integrante)
                                <button class="col-md-3 integrante m-lg-1 btn btn-default" data-toggle="modal" data-target="#desvincular{{$integrante->IdUsua}}"><i class="anticon anticon-check-circle"></i>
                                    {{$integrante->NombUsua}} {{$integrante->ApelUsua}}
                                </button>
                            @endforeach
                            @else
                            @foreach($integrantesGrupo as $integrante)
                                <span class="col-md-3 integrante m-lg-1"><i class="anticon anticon-check-circle"></i>
                                    {{$integrante->NombUsua}} {{$integrante->ApelUsua}}
                                </span>
                            @endforeach
                            @endif
                        </div>
                        <!-- Fin integrantes -->
                    </div>
                </div>

                @if ( Auth::user()->FkIdRol == 1 &&  Auth::user()->FkIdGrupo == $grupo->IdGrupo || Auth::user()->FkIdRol == 2 || Auth::user()->FkIdRol == 3 || Auth::user()->FkIdRol == 4 )
                <div class="card">
                    <div class="card-body">
                        <!-- Secci??n de los entregables  -->
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
                                                    An??lisis de requisitos
                                                @endif
                                                @if ($infoEntre->FkIdFase == 2)
                                                    Dise??o del sistema
                                                @endif
                                                @if ($infoEntre->FkIdFase == 3)
                                                    Implementaci??n o Desarrollo
                                                @endif
                                                @if ($infoEntre->FkIdFase == 4)
                                                    Verificaci??n
                                                @endif
                                                @if ($infoEntre->FkIdFase == 5)
                                                    Mantenimiento
                                                @endif

                                            </small>
                                        </p>
                                    </div>
                                    @if ( Auth::user()->FkIdRol == 1 )
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a class="btn btn-ver-mas"
                                               href="{{ url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo.'/entregable/'.$infoEntre->IdEntre) }}">
                                                <i class="anticon anticon-upload"></i> Subir
                                            </a>
                                        </div>
                                    </div>
                                    @else
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a class="btn btn-ver-mas"
                                               href="{{ url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo.'/entregable/'.$infoEntre->IdEntre) }}">
                                               <i class="anticon anticon-plus"></i> Ver m??s
                                            </a>
                                        </div>
                                    </div>
                                    @endif
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
                                    <span>??Desea desvincular a <strong>{{$integrante->NombUsua}}  {{$integrante->ApelUsua}}</strong>?</span>
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
                @endif
            </div>
@endsection
