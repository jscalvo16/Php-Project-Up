@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Entregables</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                                <a class="breadcrumb-item" href="{{ url('entregable') }}">Gestión de entregables</a>
                                <span class="breadcrumb-item active">Editar un espacio de entregable</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2>Editar un espacio de entregable</h2>
                                </div>
                                <div class="m-r-15 ml-auto">
                                    <i class="anticon anticon-info-circle text-gray infoArchivo" data-toggle="tooltip" data-placement="left" data-html="true" title="Solo se permite la carga de un archivo, si se desea subir más de uno puede subir un comprimido (.zip, .rar) <br> No se permite la carga individual de archivos ejectutables (.php, .java, .cs, .py, .exe, ...) Estos solo se permiten en archivos comprimidos"></i>
                                </div>
                            </div>
                            <br>
                            <form action="{{ url('entregable/'.$entregable->IdEntre) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-row">
                                    <!-- Input Título del entregable -->
                                    <div class="form-group col-md-12">
                                        <label for="tituloEntre"><sup class="obligatorio">*</sup>Título del entregable</label>
                                        <input type="text" class="form-control" name="tituloEntre" id="tituloEntre" placeholder="Título del entregable" value="{{ $entregable->TituEntre }}">
                                        <strong class="text-danger">{{$errors->first('tituloEntre')}}</strong>
                                    </div>

                                    <!-- Textarea descripción del proyecto -->
                                    <div class="form-group col-md-6">
                                        <label for="descEntre">Descripción</label>
                                        <textarea class="form-control textarea" rows="6" cols="30" name="descEntre" id="descEntre">{{ $entregable->DescEntre }}</textarea>
                                        <strong class="text-danger">{{$errors->first('descEntre')}}</strong>
                                    </div>

                                    <!-- Input fecha de inicio -->
                                    <div class="form-group col-md-6">
                                        <label for="fechaInicio"><sup class="obligatorio">*</sup>Fecha de inicio</label>
                                        <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" value="{{ $entregable->FechIniEntre }}">
                                        <strong class="text-danger">{{$errors->first('fechaInicio')}}</strong>
                                        <br>
                                        <br>
                                        <!-- Input fecha de inicio -->
                                        <label for="fechaFin"><sup class="obligatorio">*</sup>Fecha de cierre</label>
                                        <input type="date" class="form-control" name="fechaFin" id="fechaFin" value="{{ $entregable->FechFin }}">
                                        <strong class="text-danger">{{$errors->first('fechaFin')}}</strong>
                                    </div>

                                    <!-- Select trimestre -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Trimestre</label>
                                        <select id="trimestre" class="form-control" name="trimestre">
                                            <option selected value="0">Elige</option>
                                            <option value="Trimestre I" {{ $entregable->TrimEntre == 'Trimestre I' ? 'selected' : '' }}>Trimestre I</option>
                                            <option value="Trimestre II" {{ $entregable->TrimEntre == 'Trimestre II' ? 'selected' : '' }}>Trimestre II</option>
                                            <option value="Trimestre III" {{ $entregable->TrimEntre == 'Trimestre III' ? 'selected' : '' }}>Trimestre III</option>
                                            <option value="Trimestre IV" {{ $entregable->TrimEntre == 'Trimestre IV' ? 'selected' : '' }}>Trimestre IV</option>
                                            <option value="Trimestre V" {{ $entregable->TrimEntre == 'Trimestre V' ? 'selected' : '' }}>Trimestre V</option>
                                            <option value="Trimestre VI" {{ $entregable->TrimEntre == 'Trimestre VI' ? 'selected' : '' }}>Trimestre VI</option>
                                            <option value="Trimestre VII" {{ $entregable->TrimEntre == 'Trimestre VII' ? 'selected' : '' }}>Trimestre VII</option>
                                        </select>
                                        <strong class="text-danger">{{$errors->first('trimestre')}}</strong>
                                    </div>

                                    <!-- Select fases -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Fases de desarrollo</label>
                                        <select class="form-control" name="fases" id="fases">
                                            <option selected value="0">Elige</option>
                                            @foreach ($fases as $fase)
                                                <option value="{{ $fase->IdFase }}" {{ $entregable->FkIdFase == $fase->IdFase ? 'selected' : '' }}>
                                                    {{ $fase->NombFase }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <strong class="text-danger">{{$errors->first('fases')}}</strong>
                                    </div>

                                    <!-- Info para el tipo de archivo permitido -->
                                    <div class="form-group col-md-0">
                                        <i class="anticon anticon-info-circle text-gray infoArchivo" data-toggle="tooltip" data-placement="left" data-html="true" title="Tipos de archivos permitidos: docx, doc, docm, xls, xlsm, pptx, ppt, zip, rar, jpeg, jpg, png, txt."></i>
                                    </div>

                                    <!-- Input archivo de apoyo -->
                                    <div class="form-group col-md-5">
                                        <label for="archivo">Adjunto de apoyo</label>
                                        <input type="file" class="form-control" name="archivo" id="archivo" placeholder="Adjunto de apoyo">
                                    </div>

                                    <div class="form-group col-md-6">
                                    </div>

                                    <!-- Select fichas -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Fichas donde se asigna el entregable</label>
                                        <select class="form-control" name="fichas[]" id="fichas" multiple>
                                            <option selected value="0">Elige</option>
                                            @foreach ($fichas as $ficha)
                                                <option value="{{ $ficha->IdFicha }}">
                                                    {{ $ficha->NumbFich }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('fichas'))
                                            <strong class="text-danger">{{$errors->first('fichas')}}</strong>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="col-md-9">
                                        <span class="h3 text-warning"><strong>Precaución</strong></span>
                                        <br>
                                        <span>El entregable pertenece a las siguientes fichas:</span>
                                        <br>
                                        @foreach ($fichaEntre as $ef)
                                            <span class="text-muted">
                                               - {{ $ef->NumbFich }} <br>
                                            </span>
                                        @endforeach
                                        <span>Puede seleccionar una nueva ficha.</span>
                                    </div>
                                </div>
                                <input type="hidden" name="instructor" value="{{ Auth::user()->NombUsua }} {{ Auth::user()->ApelUsua }}">
                                <input type="submit" class="btn btn-enviar" value="Modificar">
                            </form>
                        </div>
                    </div>
                </div>
@endsection
