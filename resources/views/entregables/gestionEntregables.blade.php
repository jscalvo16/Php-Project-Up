@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Entregables</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <span class="breadcrumb-item active">Gestión de entregables</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Espacios de entregable</h2>
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <a class="btn btn-agregar-usuario" href="{{ url('entregable/create') }}">
                                        <i class="anticon anticon-plus"></i> Crear entregable
                                    </a>
                                </div>
                            </div>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Trimestre</th>
                                            <th>Creación del espacio</th>
                                            <th>Cierre del espacio</th>
                                            <th>Adjunto</th>
                                            <th>Instructor</th>
                                            <th>Fase</th>
                                            <th>Ficha</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($infoEntre as $ficha)
                                            @foreach ($ficha->entregables as $entre)
                                            <tr>
                                                <td>{{ $entre->TituEntre }}</td>
                                                <td>{{ $entre->TrimEntre }}</td>
                                                <td>{{ $entre->FechIniEntre }}</td>
                                                <td>{{ $entre->FechFin }}</td>
                                                @if ($entre->ArchEntre == null)
                                                    <td>No hay adjuntos</td>
                                                @elseif ($entre->ArchEntre != null)
                                                    <td>{{ $entre->ArchEntre }}</td>
                                                @endif
                                                <td>{{ $entre->IdInstruSeg }}</td>
                                                @if ($entre->FkIdFase == 1 )
                                                    <td>Análisis de requisitos</td>
                                                @endif
                                                @if ($entre->FkIdFase == 2 )
                                                    <td>Diseño del sistema</td>
                                                @endif
                                                @if ($entre->FkIdFase == 3 )
                                                    <td>Implementación o Desarrollo</td>
                                                @endif
                                                @if ($entre->FkIdFase == 4 )
                                                    <td>Verificación</td>
                                                @endif
                                                @if ($entre->FkIdFase == 5 )
                                                    <td>Mantenimiento</td>
                                                @endif
                                                <td>{{ $ficha->NumbFich }}</td>
                                                <td>
                                                    <a class="btn btn-info" href="{{ url('entregable/'. $entre->IdEntre. '/edit') }}" title="Modificar">
                                                        <i class="anticon anticon-form" title="Modificar"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Título</th>
                                            <th>Trimestre</th>
                                            <th>Creación del espacio</th>
                                            <th>Cierre del espacio</th>
                                            <th>Adjunto</th>
                                            <th>Instructor</th>
                                            <th>Fase</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
