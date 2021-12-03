@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Fichas</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                            <a class="breadcrumb-item" href="{{url('ficha')}}">Fichas</a>
                            <span class="breadcrumb-item active">Crear ficha</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Crear una nueva ficha</h2>
                        <br>
                        <form action="{{url('ficha')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <!-- Input número ficha -->
                                <div class="form-group col-md-6">
                                    <label for="numFicha"><sup class="obligatorio">*</sup>Número de ficha</label>
                                    <input type="text" class="form-control" name="numFicha" id="numFicha"
                                           placeholder="Número de ficha" value="{{old('numFicha')}}">
                                    <strong class="text-danger">{{$errors->first('numFicha')}}</strong>
                                </div>

                                <!-- Select Jornada de la ficha -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Jornada</label>
                                    <select id="inputState" class="form-control" name="jornada">
                                        <option selected>Elige</option>
                                        <option value="Diurna">Jornada Mañana</option>
                                        <option value="Mixta">Jornada Tarde</option>
                                        <option value="Nocturna">Jornada Noche</option>
                                        <strong class="text-danger">{{$errors->first('jornada')}}</strong>
                                    </select>
                                </div>

                                <!-- Input Fecha inicio etapa lectiva -->
                                <div class="form-group col-md-6">
                                    <label for="inicioEtapa"><sup class="obligatorio">*</sup>Fecha inicio de etapa
                                        lectiva</label>
                                    <input type="date" class="form-control" name="inicioEtapa" id="inicioEtapa"
                                           value="{{old('inicioEtapa')}}">
                                    <strong class="text-danger">{{$errors->first('inicioEtapa')}}</strong>
                                </div>

                                <!-- Input Fecha fin etapa lectiva -->
                                <div class="form-group col-md-6">
                                    <label for="finEtapa"><sup class="obligatorio">*</sup>Fecha fin de etapa
                                        lectiva</label>
                                    <input type="date" class="form-control" name="finEtapa" id="finEtapa"
                                           value="{{old('finEtapa')}}">
                                    <strong class="text-danger">{{$errors->first('finEtapa')}}</strong>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-enviar" value="Crear">
                        </form>
                    </div>
                </div>
            </div>
@endsection
