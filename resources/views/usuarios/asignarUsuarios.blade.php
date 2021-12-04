@extends('template.indexAdmin')
@section('contenido')
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Asignar usuarios</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                            <span class="breadcrumb-item active">Asignación</span>
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
                        <h2>Asignar usuarios a una ficha de caracterización</h2>
                        <br>
                        <form action="{{url('asignacion')}}" method="Post">
                            @csrf
                            <div class="form-row">
                                <!-- Select fichas -->
                                <div class="form-group col-md-6">
                                    <label><sup class="obligatorio">*</sup>Ficha</label>
                                    <select id="inputState" class="form-control" name="ficha">
                                        <option selected>Elige</option>
                                        @foreach($fich as $ficha)
                                        <option value="{{$ficha->IdFicha}}">{{$ficha->NumbFich}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Select instructores -->
                                <div class="form-group col-md-6">
                                    <label>Instructores</label>
                                    <select id="inputState" class="form-control" name="instruc[]" multiple>
                                        <option selected>Elige</option>
                                        @foreach($instructor as $instruc)
                                            <option value="{{$instruc->IdUsua}} ">
                                                {{$instruc->NombUsua}} {{$instruc->ApelUsua}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Select aprendices -->
                                <div class="form-group col-md-6">
                                    <label>Aprendices</label>
                                    <select id="inputState" class="form-control" name="apren[]" multiple>
                                        <option selected>Elige</option>
                                        @foreach($apren as $estu)
                                            <option value="{{$estu->IdUsuario}}">
                                                {{$estu->Nombre}} {{$estu->Apellido}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Select aprendices -->
                                <div class="form-group col-md-6">
                                    <label>Coordinador</label>
                                    <select id="inputState" class="form-control" name="coordinador">
                                        <option selected value="ninguno">Elige</option>
                                        @foreach($coordinador as $co)
                                            <option value="{{$co->IdUsua}}">
                                                {{$co->NombUsua}} {{$co->ApelUsua}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-enviar" value="Asignar">
                        </form>
                    </div>
                </div>
            </div>
@endsection
