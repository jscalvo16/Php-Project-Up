@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Entregables</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                                <a class="breadcrumb-item" href="{{ url('avance') }}">Documentos</a>
                                <span class="breadcrumb-item active">Modificar documento</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!-- Sección del formulario para subir el avance -->
                            <div class="row">
                                <!-- Sección del formulario-->
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <h2>Modificar avance</h2>
                                                </div>
                                                <div class="col-md-1 ml-auto">
                                                    <i class="anticon anticon-info-circle text-gray infoArchivo" data-toggle="tooltip" data-placement="left" data-html="true" title="Solo se permite la carga de un archivo, si se desea subir más de uno puede subir un comprimido (.zip, .rar) <br> No se permite la carga individual de archivos ejectutables (.php, .java, .cs, .py, .exe, ...) Estos solo se permiten en archivos comprimidos <br><br> Tipos de archivos permitidos: docx, doc, docm, xls, xlsm, xlsx, pptx, ppt, pdf, zip, rar, jpeg, jpg, png, txt."></i>
                                                </div>
                                            </div>
                                            <form action="{{url('avance/'.$avance->IdAvan)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="form-row">
                                                    <!-- Textarea descripción del avance -->
                                                    <div class="form-group col-md-8">
                                                        <label for="descAvance">Descripción del documento</label>
                                                        <textarea class="form-control textarea" rows="6" cols="30" name="descAvance" id="descAvance">{{ $avance->DescAvan }}</textarea>
                                                        <strong class="text-danger">{{$errors->first('descAvance')}}</strong>
                                                    </div>

                                                    <!-- Input para subir el avance -->
                                                    <div class="form-group col-md-8">
                                                        <label for="avance"><sup class="obligatorio">*</sup>Avance</label>
                                                        <input type="file" class="form-control" name="avance" id="avance" placeholder="Documento de evidencia">
                                                        <strong class="text-danger">{{$errors->first('avance')}}</strong>
                                                    </div>

                                                    <input type="hidden" name="entregable" value="{{ $avance->FkIdEntre }}">
                                                    <input type="hidden" name="grupo" value="{{ $avance->FkIdGrupo }}">
                                                </div>
                                                <input type="submit" class="btn btn-enviar" value="Modificar">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin formulario -->

                                <!-- Sección del archivo -->
                                <div class="col-md-4 ml-auto">
                                    <div class="card">
                                        <div class="card-body file-manager-content-body">
                                            <div class="file-manager-content-details">
                                                <div class="content-details">
                                                    <div class="d-flex justify-content-between align-items-center border-bottom">
                                                        <h4 class="m-b-5">{{ $avance->ArchAvan }}</h4>
                                                    </div>
                                                    <div class="m-t-70">
                                                        <div class="d-flex justify-content-around display-1 align-items-center content-details-file">
                                                            @if (str_ends_with($avance->ArchAvan , '.docx'))
                                                                <i class="anticon anticon-file-word text-primary"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.doc'))
                                                                <i class="anticon anticon-file-word text-primary"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.docm'))
                                                                <i class="anticon anticon-file-word text-primary"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.xls'))
                                                                <i class="anticon anticon-file-excel text-success"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.xlsm'))
                                                                <i class="anticon anticon-file-excel text-success"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.xlsx'))
                                                                <i class="anticon anticon-file-excel text-success"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.pptx'))
                                                                <i class="anticon anticon-file-ppt text-warning"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.ppt'))
                                                                <i class="anticon anticon-file-ppt text-warning"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.pdf'))
                                                                <i class="anticon anticon-file-pdf text-danger"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.zip'))
                                                                <i class="anticon anticon-hdd text-secondary"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.rar'))
                                                                <i class="anticon anticon-hdd text-secondary"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.jpeg'))
                                                                <i class="anticon anticon-picture text-muted"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.jpg'))
                                                                <i class="anticon anticon-picture text-muted"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.png'))
                                                                <i class="anticon anticon-picture text-muted"></i>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.txt'))
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
                                                            @if (str_ends_with($avance->ArchAvan , '.docx'))
                                                                <dd class="col-7">Word</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.doc'))
                                                                <dd class="col-7">Word</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.docm'))
                                                                <dd class="col-7">Word</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.xls'))
                                                                <dd class="col-7">Excel</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.xlsm'))
                                                                <dd class="col-7">Excel</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.xlsx'))
                                                                <dd class="col-7">Excel</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.pptx'))
                                                                <dd class="col-7">Power Point</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.ppt'))
                                                                <dd class="col-7">Power Point</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.pdf'))
                                                                <dd class="col-7">PDF</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.zip'))
                                                                <dd class="col-7">ZIP</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.rar'))
                                                                <dd class="col-7">RAR</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.jpeg'))
                                                                <dd class="col-7">Imagen</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.jpg'))
                                                                <dd class="col-7">Imagen</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.png'))
                                                                <dd class="col-7">Imagen</dd>
                                                            @endif
                                                            @if (str_ends_with($avance->ArchAvan , '.txt'))
                                                                <dd class="col-7">Texto</dd>
                                                            @endif
                                                        </dl>
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Subido:</dt>
                                                            <dd class="col-7">{{ $avance->FechAvan }}</dd>
                                                        </dl>
                                                        <dl class="row m-b-5">
                                                            <dt class="col-5 text-dark">Descripción:</dt>
                                                            @if ($avance->DescAvan == NULL)
                                                                <dd class="col-7">Sin descripción</dd>
                                                            @elseif ($avance->DescAvan)
                                                                <dd class="col-7">{{ $avance->DescAvan }}</dd>
                                                            @endif
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin archivo -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection
