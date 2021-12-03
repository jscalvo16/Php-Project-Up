@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Fichas</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                            <span class="breadcrumb-item active">Gestión de fichas</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @if (session("MensajeFicha"))
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
                                                    <p>{{ session("MensajeFicha") }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-3">
                                <h2>Fichas</h2>
                            </div>
                            @if ( Auth::user()->FkIdRol == 4 )
                            <div class="col-md-2 ml-auto">
                                <a class="btn btn-agregar-usuario" href="{{url('ficha/create')}}">
                                    <i class="anticon anticon-plus"></i> Crear ficha
                                </a>
                            </div>
                            @endif
                        </div>
                        <div class="m-t-25">
                            <table id="data-table" class="table">
                                <thead>
                                <tr>
                                    <th>Ficha</th>
                                    <th>Inicio etapa lectiva</th>
                                    <th>Fin etapa lectiva</th>
                                    <th>Jornada</th>
                                    @if ( Auth::user()->FkIdRol == 4 )
                                    <th>Acciones</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fichas as $fich)
                                    <tr>
                                        <td>{{{$fich -> NumbFich}}}</td>
                                        <td>{{$fich -> InicEtapElec}}</td>
                                        <td>{{$fich -> FinEtapElec}}</td>
                                        <td>{{$fich -> JornFicha}}</td>
                                        @if ( Auth::user()->FkIdRol == 4 )
                                        <td>
                                            <a class="btn btn-info" href="{{url('ficha/'.$fich->IdFicha.'/edit')}}" title="Modificar">
                                                <i class="anticon anticon-form" title="Modificar"></i>
                                            </a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Ficha</th>
                                    <th>Inicio etapa lectiva</th>
                                    <th>Fin etapa lectiva</th>
                                    <th>Jornada</th>
                                    @if ( Auth::user()->FkIdRol == 4 )
                                    <th>Acciones</th>
                                    @endif
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
