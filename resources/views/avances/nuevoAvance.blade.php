@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Entregables</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                                <a class="breadcrumb-item" href="{{ url('ficha/'.$ficha->IdFicha) }}">Ficha {{ $ficha->NumbFich }}</a>
                                <a class="breadcrumb-item" href="{{ url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo) }}">{{ $grupo->NombGrupo }}</a>
                                <span class="breadcrumb-item active">{{ $entregable->TituEntre }}</span>
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
                            <h1>{{ $entregable->TituEntre }}</h1>
                            <br>
                            <!-- Descripción completa del entregable -->
                            <div class="row ">
                                <div class="col-md-5">
                                    <h4>Descripción</h4>
                                    <p>
                                        {{ $entregable->DescEntre }}
                                    </p>
                                    @if ( Auth::user()->FkIdRol == 1 )
                                    <br>
                                    @if ($entregable->ArchEntre == null)
                                        <strong>No hay adjuntos compartidos</strong>
                                    @elseif ($entregable->ArchEntre != null)
                                        <a href="{{ url('descargarEntre/'.$entregable->IdEntre) }}" style="color: #525252">
                                            <strong>{{ $entregable->ArchEntre }}</strong>
                                        </a>
                                    @endif
                                    @endif
                                </div>
                                <div class="col-md-5 ml-auto">
                                    <h5>Fecha de creación del espacio</h5>
                                    <p>
                                        {{ $entregable->FechIniEntre }}
                                    </p>
                                    <h5>Fecha de cierre del espacio</h5>
                                    <p>
                                        {{ $entregable->FechFin }}
                                    </p>
                                    <h5>Fase de desarrollo</h5>
                                    <p>
                                        @if ($entregable->FkIdFase == 1)
                                            Análisis de requisitos
                                        @endif
                                        @if ($entregable->FkIdFase == 2)
                                            Diseño del sistema
                                        @endif
                                        @if ($entregable->FkIdFase == 3)
                                            Implementación o Desarrollo
                                        @endif
                                        @if ($entregable->FkIdFase == 4)
                                            Verificación
                                        @endif
                                        @if ($entregable->FkIdFase == 5)
                                            Mantenimiento
                                        @endif
                                    </p>
                                    <p>{{ $entregable->TrimEntre }}</p>
                                </div>
                            </div>
                            <!-- Fin descripción completa -->

                            <br>
                            <br>
                            <br>
                            <!-- Sección del formulario para subir el avance -->
                            <div class="row">
                                <!-- Sección del formulario-->
                                @if ( Auth::user()->FkIdRol == 1 )
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h2>Subir avance</h2>
                                                </div>
                                                <div class="col-md-1 ml-auto">
                                                    <i class="anticon anticon-info-circle text-gray infoArchivo" data-toggle="tooltip" data-placement="left" data-html="true" title="Solo se permite la carga de un archivo, si se desea subir más de uno puede subir un comprimido (.zip, .rar) <br> No se permite la carga individual de archivos ejectutables (.php, .java, .cs, .py, .exe, ...) Estos solo se permiten en archivos comprimidos <br><br> Tipos de archivos permitidos: docx, doc, docm, xls, xlsm, xlsx, pptx, ppt, pdf, zip, rar, jpeg, jpg, png, txt."></i>
                                                </div>
                                            </div>
                                            <form action="{{url('avance')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <!-- Textarea descripción del avance -->
                                                    <div class="form-group col-md-8">
                                                        <label for="descAvance">Descripción del documento</label>
                                                        <textarea class="form-control textarea" rows="6" cols="30" name="descAvance" id="descAvance">{{ old('descAvance') }}</textarea>
                                                        <strong class="text-danger">{{$errors->first('descAvance')}}</strong>
                                                    </div>

                                                    <!-- Input para subir el avance -->
                                                    <div class="form-group col-md-8">
                                                        <label for="avance"><sup class="obligatorio">*</sup>Avance</label>
                                                        <input type="file" class="form-control" name="avance" id="avance" placeholder="Documento de evidencia">
                                                        <strong class="text-danger">{{$errors->first('avance')}}</strong>
                                                    </div>

                                                    <input type="hidden" name="entregable" value="{{ $entregable->IdEntre }}">
                                                    <input type="hidden" name="grupo" value="{{ $grupo->IdGrupo }}">
                                                    <input type="hidden" name="ficha" value="{{ $ficha->IdFicha }}">
                                                </div>
                                                <input type="submit" class="btn btn-enviar" value="Subir">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Fin formulario -->

                                <!-- Sección del archivo -->
                                @if ( Auth::user()->FkIdRol == 2 || Auth::user()->FkIdRol == 1)
                                @foreach ( $avance as $avan )
                                <div class="col-md-4 ml-auto">
                                    <div class="card">
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
                                                                <i class="anticon anticon-picture text-muted"></i>
                                                            @endif
                                                            @if (str_ends_with($avan->ArchAvan , '.jpg'))
                                                                <i class="anticon anticon-picture text-muted"></i>
                                                            @endif
                                                            @if (str_ends_with($avan->ArchAvan , '.png'))
                                                                <i class="anticon anticon-picture text-muted"></i>
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
                                                            <dt class="col-5 text-dark">Descripción:</dt>
                                                            @if ($avan->DescAvan == NULL)
                                                                <dd class="col-7">Sin descripción</dd>
                                                            @elseif ($avan->DescAvan)
                                                                <dd class="col-7">{{ $avan->DescAvan }}</dd>
                                                            @endif
                                                        </dl>
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Grupo:</dt>
                                                            <dd class="col-7">{{ $grupo->NombGrupo }}</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <!-- Fin archivo -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection
