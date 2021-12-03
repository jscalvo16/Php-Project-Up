@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Avances</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
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
                                            @if ( Auth::user()->FkIdRol == 1 || Auth::user()->FkIdRol == 2 )
                                            <a class="btn btn-cerrar-modal col-md-7" href="{{ url('observacion/'.$avan->IdAvan) }}">Observaciones</a>
                                            <a class="btn btn-ver-mas col-md-2 ml-auto" href="{{ url('ficha/'.$avan->FkIdFicha.'/grupo/'.$avan->IdGrupo.'/entregable/'.$avan->FkIdEntre) }}" title="Ver más">
                                                <i class="anticon anticon-plus" title="Ver más"></i>
                                            </a>
                                            @endif
                                            @if ( Auth::user()->FkIdRol == 1 )
                                            <a class="btn btn-info col-md-2" href="{{ url('avance/'.$avan->IdAvan.'/edit') }}" title="Modificar">
                                                <i class="anticon anticon-form" title="Modificar"></i>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Fin archivos de avances -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection
