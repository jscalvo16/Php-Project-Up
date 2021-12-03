@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Fichas</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                            <a class="breadcrumb-item" href="{{url('ficha')}}">Fichas</a>
                            <span class="breadcrumb-item active">Modificar ficha</span>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Modificar ficha</h2>
                        <br>
                        <form action="{{url('ficha/'.$ficha->IdFicha)}}" method="POST" >
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <!-- Input número ficha -->
                                <div class="form-group col-md-6">
                                    <label for="numFicha"><sup class="obligatorio">*</sup>Número de ficha</label>
                                    <input type="text" class="form-control" name="numFicha" id="numFicha" placeholder="Número de ficha"
                                    value="{{$ficha->NumbFich}}">
                                    <strong class="text-danger">{{$errors->first('numFicha')}}</strong>
                                </div>

                                <!-- Select Jornada de la ficha -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Jornada</label>
                                    <select id="inputState" class="form-control" name="jornada">
                                        <option selected>Elige</option>
                                        <option value="Diurna" {{ $ficha->JornFicha == 'Diurna' ? 'selected' : '' }}>Jornada Diurna</option>
                                        <option value="Tarde" {{ $ficha->JornFicha == 'Tarde' ? 'selected' : '' }}>Jornada Tarde</option>
                                        <option value="Nocturna" {{ $ficha->JornFicha == 'Nocturna' ? 'selected' : '' }}>Jornada Nocturna</option>
                                        <strong class="text-danger">{{$errors->first('jornada')}}</strong>
                                    </select>
                                </div>

                                <!-- Select trimestre -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Trimestre</label>
                                    <select id="trimestre" class="form-control" name="trimestre">
                                        <option selected value="0">Elige</option>
                                        <option value="Trimestre I" {{ $ficha->Trimestre == 'Trimestre I' ? 'selected' : '' }}>Trimestre I</option>
                                        <option value="Trimestre II" {{ $ficha->Trimestre == 'Trimestre II' ? 'selected' : '' }}>Trimestre II</option>
                                        <option value="Trimestre III" {{ $ficha->Trimestre == 'Trimestre III' ? 'selected' : '' }}>Trimestre III</option>
                                        <option value="Trimestre IV" {{ $ficha->Trimestre == 'Trimestre IV' ? 'selected' : '' }}>Trimestre IV</option>
                                        <option value="Trimestre V" {{ $ficha->Trimestre == 'Trimestre V' ? 'selected' : '' }}>Trimestre V</option>
                                        <option value="Trimestre VI" {{ $ficha->Trimestre == 'Trimestre VI' ? 'selected' : '' }}>Trimestre VI</option>
                                        <option value="Trimestre VII" {{ $ficha->Trimestre == 'Trimestre VII' ? 'selected' : '' }}>Trimestre VII</option>
                                    </select>
                                    <strong class="text-danger">{{$errors->first('trimestre')}}</strong>
                                </div>

                                <!-- Input Fecha inicio etapa lectiva -->
                                <div class="form-group col-md-6">
                                    <label for="inicioEtapa"><sup class="obligatorio">*</sup>Fecha inicio de etapa lectiva</label>
                                    <input type="date" class="form-control" name="inicioEtapa" id="inicioEtapa" value="{{$ficha->InicEtapElec}}">
                                    <strong class="text-danger">{{$errors->first('inicioEtapa')}}</strong>
                                </div>

                                <!-- Input Fecha fin etapa lectiva -->
                                <div class="form-group col-md-6">
                                    <label for="finEtapa"><sup class="obligatorio">*</sup>Fecha fin de etapa lectiva</label>
                                    <input type="date" class="form-control" name="finEtapa" id="finEtapa" value="{{$ficha->FinEtapElec}}">
                                    <strong class="text-danger">{{$errors->first('finEtapa')}}</strong>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-enviar" value="Modificar">
                        </form>
                    </div>
                </div>
            </div>
@endsection
