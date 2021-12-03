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
                            <span class="breadcrumb-item active">Crear grupo de proyecto</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <h2>Crear grupo de proyecto</h2>
                            </div>
                        </div>
                        <br>
                        <form action="{{url('grupo')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <!-- Input Nombre del proyecto -->
                                <div class="form-group col-md-12">
                                    <label for="nombreProyecto"><sup class="obligatorio">*</sup>Nombre
                                        del proyecto</label>
                                    <input type="text" class="form-control" name="nombreProyecto"
                                           id="nombreProyecto" placeholder="Nombre del proyecto">
                                    <strong
                                        class="text-danger">{{$errors->first('nombreProyecto')}}</strong>
                                </div>

                                <!-- Textarea descripción del proyecto -->
                                <div class="form-group col-md-6">

                                    <label for="descProyecto"><sup class="obligatorio">*</sup>Descripción
                                        del proyecto</label>
                                    <textarea class="form-control textarea" name="descProyecto"
                                              id="descProyecto"></textarea>
                                    <strong
                                        class="text-danger">{{$errors->first('descProyecto')}}</strong>

                                </div>

                                <!-- Textarea descripción del proyecto -->
                                <div class="form-group col-md-6">

                                    <label for="alcProyecto"><sup class="obligatorio">*</sup>Alcance
                                        del proyecto</label>
                                    <textarea class="form-control textarea" name="alcProyecto"
                                              id="alcProyecto"></textarea>
                                    <strong
                                        class="text-danger">{{$errors->first('alcProyecto')}}</strong>

                                </div>

                                <h4 class="col-md-12"><sup class="obligatorio">*</sup>Integrantes
                                </h4>
                                <!-- Select integrante 1 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante1" class="form-control"
                                            name="integrante1">
                                        <option selected value="0">Integrante 1</option>
                                        @foreach($aprendices as $aprendiz)
                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if(session('message'))
                                        <strong class="text-danger">{{session('message')}}</strong>
                                    @endif
                                </div>

                                <!-- Select integrante 2 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante2" class="form-control"
                                            name="integrante2">
                                        <option selected>Integrante 2</option>
                                        @foreach($aprendices as $aprendiz)
                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>

                                            @endif
                                        @endforeach
                                    </select>
                                    @if(session('message'))
                                        <strong class="text-danger">{{session('message')}}</strong>
                                    @endif
                                </div>

                                <!-- Select integrante 3 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante3" class="form-control"
                                            name="integrante3">
                                        <option selected>Integrante 3</option>
                                        @foreach($aprendices as $aprendiz)

                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if(session('message'))
                                        <strong class="text-danger">{{session('message')}}</strong>
                                    @endif
                                </div>

                                <!-- Select integrante 4 -->
                                <div class="form-group col-md-6">
                                    <select id="integrante4" class="form-control"
                                            name="integrante4">
                                        <option selected>Integrante 4</option>
                                        @foreach($aprendices as $aprendiz)

                                            @if($aprendiz->FkIdGrupo==null)
                                                <option value="{{$aprendiz->IdUsua}}">
                                                    {{$aprendiz->NombUsua}} {{$aprendiz->ApelUsua}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if(session('message'))
                                        <strong class="text-danger">{{session('message')}}</strong>
                                @endif

                                <!--Input ID de la ficha-->
                                    <input type="hidden" value="{{$ficha->IdFicha}}" name="idFicha">
                                </div>
                                <strong
                                    class="text-danger">{{$errors->first('integrante1')}}</strong>
                            </div>
                            <input type="submit" class="btn btn-enviar" value="Crear">
                        </form>
                    </div>
                </div>
            </div>
@endsection
