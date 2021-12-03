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
                            <a class="breadcrumb-item"
                               href="{{ url('ficha/'.$ficha->IdFicha.'/grupo/'.$grupo->IdGrupo) }}">{{$grupo->NombGrupo}}</a>
                            <span class="breadcrumb-item active">Editar grupo de proyecto</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <h2>Editar grupo de proyecto</h2>
                            </div>
                        </div>
                        <br>
                        <form action="{{url('grupo/'.$grupo->IdGrupo)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <!-- Input Nombre del proyecto -->
                                <div class="form-group col-md-12">
                                    <label for="nombreProyecto"><sup class="obligatorio">*</sup>Nombre
                                        del proyecto</label>
                                    <input type="text" class="form-control" name="nombreProyecto"
                                           id="nombreProyecto" placeholder="Nombre del proyecto"
                                           value="{{$grupo->NombGrupo}}">
                                    <strong
                                        class="text-danger">{{$errors->first('nombreProyecto')}}</strong>
                                </div>

                                <!-- Textarea descripción del proyecto -->
                                <div class="form-group col-md-6">
                                    <label for="descProyecto"><sup class="obligatorio">*</sup>Descripción
                                        del proyecto</label>
                                    <textarea class="form-control textarea" name="descProyecto"
                                              id="descProyecto">{{$grupo->DescriGrupo}}</textarea>
                                    <strong
                                        class="text-danger">{{$errors->first('descProyecto')}}</strong>
                                </div>

                                <!-- Textarea descripción del proyecto -->
                                <div class="form-group col-md-6">
                                    <label for="alcProyecto"><sup class="obligatorio">*</sup>Alcance
                                        del proyecto</label>
                                    <textarea class="form-control textarea" name="alcProyecto"
                                              id="alcProyecto">{{$grupo->AlcanGrupo}}</textarea>
                                    <strong
                                        class="text-danger">{{$errors->first('alcProyecto')}}</strong>
                                </div>

                                <h4 class="col-md-12">Asignar nuevo integrantes
                                </h4>
                                <!-- Select integrantes -->
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="integrante">
                                        <option value="Ninguno">Elige</option>
                                        @foreach($aprendices as $aprendiz)
                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="idFicha" value="{{$ficha->IdFicha}}">
                            <input type="submit" class="btn btn-enviar" value="Editar">
                        </form>
                    </div>
                </div>
            </div>
@endsection
