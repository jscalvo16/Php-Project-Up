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
                        <div class="card-body">
                            <h2>Asignar usuarios a una ficha de caracterización</h2>
                            <br>
                            <form action="#" method="GET">
                                <div class="form-row">
                                    <!-- Select fichas -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Ficha</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Elige</option>
                                            <option>Muchas fichas...</option>
                                        </select>
                                    </div>

                                    <!-- Select instructores -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Instructores</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Elige</option>
                                            <option>Muchas instructores...</option>
                                        </select>
                                    </div>

                                    <!-- Select aprendices -->
                                    <div class="form-group col-md-6">
                                        <label><sup class="obligatorio">*</sup>Aprendices</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Elige</option>
                                            <option>Muchas aprendices...</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-enviar" value="Asignar">
                            </form>
                        </div>
                    </div>
                </div>
@endsection
