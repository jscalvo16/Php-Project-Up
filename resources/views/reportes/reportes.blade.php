@extends('template.indexAdmin')
@section('contenido')
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Reportes</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <span class="breadcrumb-item active">Generar reporte</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>Generar un reporte</h2>
                            <br>
                            <!-- Formulario reporte PDF -->
                            <form action="{{url('PDF')}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <!-- Select fichas -->
                                    <div class="form-group col-md-6">
                                        <label for="archivo"><sup class="obligatorio">*</sup>Fichas
                                            (PDF <i class="anticon anticon-file-pdf text-danger"></i>)
                                        </label>
                                        <select id="fichas" name="fichas" class="form-control">
                                            <option value="0">Elige</option>
                                            @foreach ( $fichas as $ficha )
                                             <option value="{{$ficha->IdFicha}}">{{$ficha->NumbFich}}</option>
                                            @endforeach
                                        </select>
                                        <strong class="text-danger">{{$errors->first('fichas')}}</strong>
                                    </div>
                                    <div class="form-group col-md-1 ml-auto m-t-25">
                                        <input type="submit" class="btn btn-enviar" value="Generar PDF">
                                    </div>
                                </div>
                            </form>
                            <br>
                            <!-- Formulario reporte Excel -->
                            <form action="{{url('EXCEL')}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <!-- Select fichas -->
                                    <div class="form-group col-md-6">
                                        <label for="archivo"><sup class="obligatorio">*</sup>Fichas
                                            (Excel <i class="anticon anticon-file-excel text-success"></i>)
                                        </label>
                                        <select id="fichas" name="ficha" class="form-control">
                                            <option value="0">Elige</option>
                                            @foreach ( $fichas as $ficha )
                                             <option value="{{$ficha->IdFicha}}">{{$ficha->NumbFich}}</option>
                                            @endforeach
                                        </select>
                                        <strong class="text-danger">{{$errors->first('ficha')}}</strong>
                                    </div>
                                    <div class="form-group col-md-1 ml-auto m-t-25">
                                        <input type="submit" class="btn btn-enviar" value="Generar Excel">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
