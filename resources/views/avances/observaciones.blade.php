@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Avances</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                                <a class="breadcrumb-item" href="{{ url('avance') }}">Documentos</a>
                                <span class="breadcrumb-item active">Retroalimentación</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="chat chat-app row">
                                <!-- Sección del archivo -->
                                @foreach ($avance as $avan)
                                <div class="chat-list">
                                    <div class="card">
                                        <div class="card-body file-manager-content-body">
                                            <div class="file-manager-content-details">
                                                <div class="content-details">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center border-bottom">
                                                        <h3 class="m-b-5">{{ $avan->ArchAvan }}</h3>
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
                                                            <dd class="col-7">{{ $avan->NombGrupo    }}</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Fin archivo -->

                                <!-- Sección del chat Observación-Respuesta -->
                                <div class="chat-content">
                                    <div class="conversation">
                                        <div class="conversation-wrapper">
                                            <div class="conversation-header justify-content-between">
                                                <h3>Observaciones</h3>
                                            </div>
                                            <div class="conversation-body">
                                                @foreach ($mensajes as $msj)
                                                @if ($msj->FkIdRol == 2)
                                                <div class="msg msg-recipient">
                                                    <div class="m-r-10">
                                                        <div class="avatar avatar-image">
                                                            <img src=" {{ asset('assets/img/avatars/logo-sena.png') }}"
                                                                alt="Logo SENA">
                                                        </div>
                                                    </div>
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>{{$msj->Mensaje}}</span>
                                                        </div>
                                                        <small class="text-muted" style="float: l">
                                                            {{$msj->NombUsua}} {{$msj->ApelUsua}}
                                                        </small>
                                                    </div>
                                                </div>
                                                @elseif ($msj->FkIdRol == 1)
                                                <div class="msg msg-sent">
                                                    <div class="bubble">
                                                        <div class="bubble-wrapper">
                                                            <span>{{$msj->Mensaje}}</span>
                                                        </div>
                                                        <small class="text-muted" style="float: right">
                                                            {{$msj->NombUsua}} {{$msj->ApelUsua}}
                                                        </small>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="conversation-footer">
                                                <form action="{{url('enviar')}}" method="POST" style="width: 100%">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col-md-8">
                                                            <input class="chat-input" type="text" placeholder="Mensaje" id="mensaje" name="mensaje">
                                                        </div>
                                                        <input type="hidden" id="mensaje" name="usuario" value="{{ Auth::user()->IdUsua }}">
                                                        @foreach ($avance as $avan)
                                                            <input type="hidden" id="mensaje" name="avance" value="{{$avan->IdAvan}}">
                                                        @endforeach
                                                        <div class="form-group ml-auto m-t-20">
                                                            <button class="d-none d-md-block btn btn-enviar" type="submit" title="Enviar">
                                                                <i class="far fa-paper-plane"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin chat -->

                            </div>
                        </div>
                    </div>
                </div>
@endsection
