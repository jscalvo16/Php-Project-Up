<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProjectUp</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/img/logo/icono.svg') }} ">

    <!-- data-table css -->
    <link href=" {{ asset('lib/vendors/datatables/dataTables.bootstrap.min.css') }} " rel="stylesheet">

    <!-- Core css -->
    <link href=" {{ asset('css/app.min.css') }} " rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src=" {{ asset('assets/img/logo/logo-medio.svg') }} " alt="Logo ProjectUp">
                        <img class="logo-fold" src=" {{ asset('assets/img/logo/icono.svg') }} " alt="Icono ProjectUp"  width="60px" height="60px">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src=" {{ asset('assets/img/logo/logo-medio-blanco.svg') }} " alt="Logo ProjectUp">
                        <img class="logo-fold" src=" {{ asset('assets/img/logo/icono.svg') }} " alt="Icono ProjectUp">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} "  alt="Logo SENA">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} " alt="Logo SENA">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">Nicolas Rosero</p>
                                            <p class="m-b-0 opacity-07">UI/UX Desinger</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="perfil.html" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Perfil</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Cerrar sesión</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="usuarios.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user"></i>
                                </span>
                                <span class="title">Usuarios</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-folder"></i>
                                </span>
                                <span class="title">Fichas</span>
                                <span class="arrow">
									<i class="arrow-icon"></i>
								</span>
                            </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="nuevaFicha.html">Crear fichas</a>
                                    </li>
                                    <li class="active">
                                        <a href="fichas.html">2242753</a>
                                    </li>
                                    <li>
                                        <a href="#">2242745</a>
                                    </li>
                                    <li>
                                        <a href="#">2242742</a>
                                    </li>
                                    <li>
                                        <a href="#">2242756</a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="asignarUsuarios.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-usergroup-add"></i>
                                </span>
                                <span class="title">Asignación</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="avances.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file-done"></i>
                                </span>
                                <span class="title">Avances</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="reportes.html">
                                <span class="icon-holder">
                                    <i class="anticon anticon-snippets"></i>
                                </span>
                                <span class="title">Reportes</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">


                <!-- Content Wrapper (grupos por ficha) START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Fichas</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <span class="breadcrumb-item active">Ficha 2242753</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#infoFicha" role="tab" aria-controls="home-justified" aria-selected="true">Información general</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#gruposFicha" role="tab" aria-controls="profile-justified" aria-selected="false">Grupos de proyecto</a>
                                </li>
                            </ul>

                            <!-- Sección de la información de la ficha -->
                            <div class="tab-content m-t-15" id="myTabContentJustified">
                                <div class="tab-pane fade show active" id="infoFicha" role="tabpanel" aria-labelledby="home-tab-justified">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h4>Coordinador: Gustavo Beltrán Macías</h4>
                                            <h4>Instructores de revisión</h4>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Juan Pablo Rojas Martinez</li>
                                                <li class="list-group-item">Rosa Porras Castañeda</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 ml-auto">
                                            <h5>Inicio etapa lectiva: 12/02/2020</h5>
                                            <h5>Fin etapa lectiva: 30/06/2022</h5>
                                            <h5>Jornada: Tarde</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>Aprendices</h4>
                                        </div>
                                        <!-- Crear grupo o entregable (botones) -->
                                        <div class="col-md-3 ml-auto">
                                            <button class="btn btn-crear entre" data-toggle="modal" data-target=".modal-entregable">
                                                <i class="anticon anticon-plus"></i> Crear entregable
                                            </button>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-crear" data-toggle="modal" data-target=".modal-grupo">
                                                <i class="anticon anticon-plus"></i> Crear grupo
                                            </button>
                                        </div>
                                    </div>
                                    <h4 class="coordinador">Coordinador: Gustavo Beltrán Macías</h4>
                                    <div class="m-t-25">
                                        <table id="data-table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Tipo documento</th>
                                                    <th>Número identificación</th>
                                                    <th>Fecha nacimiento</th>
                                                    <th>Correo</th>
                                                    <th>Estado</th>
                                                    <th>Rol</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar"title="Modificar">
                                                            <i class="anticon anticon-form"title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar"title="Modificar">
                                                            <i class="anticon anticon-form"title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>Activo</td>
                                                    <td>Null</td>
                                                    <td>
                                                        <a class="btn btn-info" href="#modificar" title="Modificar">
                                                            <i class="anticon anticon-form" title="Modificar"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Tipo documento</th>
                                                    <th>Número identificación</th>
                                                    <th>Fecha nacimiento</th>
                                                    <th>Correo</th>
                                                    <th>Estado</th>
                                                    <th>Rol</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- Fin información general de la ficha -->


                                <!-- Sección de los grupos de proyecto  -->
                                <div class="tab-pane fade" id="gruposFicha" role="tabpanel" aria-labelledby="profile-tab-justified">
                                    <!-- Grupos -->
                                    <div class="m-t-25 grupos">
                                        <div class="card" style="max-width: 350px">
                                            <div class="card-body">
                                                <h4>S.I. Para la gestión de residentes en el CR La Aurora</h4>
                                                <p>
                                                    El sistema de información estará destinado a realizar un sistema para gestionar la entrada y salida de visitantes y residentes en el CR La Aurora.
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a class="btn btn-ver-mas" href="integrantes.html">Ver mas</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="max-width: 350px">
                                            <div class="card-body">
                                                <h4>S.I. Para la gestión de residentes en el CR La Aurora</h4>
                                                <p>
                                                    El sistema de información estará destinado a realizar un sistema para gestionar la entrada y salida de visitantes y residentes en el CR La Aurora.
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a class="btn btn-ver-mas" href="integrantes.html">Ver mas</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="max-width: 350px">
                                            <div class="card-body">
                                                <h4>S.I. Para la gestión de residentes en el CR La Aurora</h4>
                                                <p>
                                                    El sistema de información estará destinado a realizar un sistema para gestionar la entrada y salida de visitantes y residentes en el CR La Aurora.
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a class="btn btn-ver-mas" href="integrantes.html">Ver mas</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="max-width: 350px">
                                            <div class="card-body">
                                                <h4>S.I. Para la gestión de residentes en el CR La Aurora</h4>
                                                <p>
                                                    El sistema de información estará destinado a realizar un sistema para gestionar la entrada y salida de visitantes y residentes en el CR La Aurora.
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a class="btn btn-ver-mas" href="integrantes.html">Ver mas</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin grupos de proyecto -->

                                <!-- Modales -->
                                <!-- Formulario modal para crear un grupo de proyecto -->
                                <div class="modal fade modal-grupo" id="modalGrupos">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title" id="modalGruposLabel">Crear un grupo de proyecto</h1>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="POST">
                                                    <div class="form-row">
                                                        <!-- Input Nombre del proyecto -->
                                                        <div class="form-group col-md-12">
                                                            <label for="nombreProyecto"><sup class="obligatorio">*</sup>Nombre del proyecto</label>
                                                            <input type="text" class="form-control" name="nombreProyecto" id="nombreProyecto" placeholder="Nombre del proyecto">
                                                        </div>

                                                        <!-- Textarea descripción del proyecto -->
                                                        <div class="form-group col-md-6">
                                                            <label for="descProyecto"><sup class="obligatorio">*</sup>Descripción del proyecto</label>
                                                            <textarea class="form-control textarea" name="descProyecto" id="descProyecto"></textarea>
                                                        </div>

                                                        <!-- Textarea descripción del proyecto -->
                                                        <div class="form-group col-md-6">
                                                            <label for="alcProyecto"><sup class="obligatorio">*</sup>Alcance del proyecto</label>
                                                            <textarea class="form-control textarea" name="alcProyecto" id="alcProyecto"></textarea>
                                                        </div>

                                                        <h4 class="col-md-12"><sup class="obligatorio">*</sup>Integrantes</h4>
                                                        <!-- Select integrante 1 -->
                                                        <div class="form-group col-md-6">
                                                            <select id="integrante" class="form-control">
                                                                <option selected>Integrante 1</option>
                                                                <option>Muchos aprendices...</option>
                                                            </select>
                                                        </div>

                                                        <!-- Select integrante 2 -->
                                                        <div class="form-group col-md-6">
                                                            <select id="integrante" class="form-control">
                                                                <option selected>Integrante 2</option>
                                                                <option>Muchos aprendices...</option>
                                                            </select>
                                                        </div>

                                                        <!-- Select integrante 3 -->
                                                        <div class="form-group col-md-6">
                                                            <select id="integrante" class="form-control">
                                                                <option selected>Integrante 3</option>
                                                                <option>Muchos aprendices...</option>
                                                            </select>
                                                        </div>

                                                        <!-- Select integrante 4 -->
                                                        <div class="form-group col-md-6">
                                                            <select id="integrante" class="form-control">
                                                                <option selected>Integrante 4</option>
                                                                <option>Muchos aprendices...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-cerrar-modal" data-dismiss="modal">Cerrar</button>
                                                        <input type="submit" class="btn btn-crear" value="Crear">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin formulario modal para crear un grupo de proyecto -->


                                <!-- Formulario modal para crear un entregable -->
                                <div class="modal fade modal-entregable" id="exampleModal">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title" id="exampleModalLabel">Crear un entregable</h1>
                                                <i class="anticon anticon-info-circle text-gray infoArchivo" data-toggle="tooltip" data-placement="left" data-html="true" title="Solo se permite la carga de un archivo, si se desea subir más de uno puede subir un comprimido (.zip, .rar) <br> No se permite la carga individual de archivos ejectutables (.php, .java, .cs, .py, ...) Estos solo se permiten en archivos comprimidos"></i>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="POST">
                                                    <div class="form-row">
                                                        <!-- Input Título del entregable -->
                                                        <div class="form-group col-md-12">
                                                            <label for="tituloEntre"><sup class="obligatorio">*</sup>Título del entregable</label>
                                                            <input type="text" class="form-control" name="tituloEntre" id="tituloEntre" placeholder="Título del entregable">
                                                        </div>

                                                        <!-- Textarea descripción del proyecto -->
                                                        <div class="form-group col-md-6">
                                                            <label for="descEntre"><sup class="obligatorio">*</sup>Descripción</label>
                                                            <textarea class="form-control textarea" rows="6" cols="30" name="descEntre" id="descEntre"></textarea>
                                                        </div>

                                                        <!-- Input fecha de inicio -->
                                                        <div class="form-group col-md-6">
                                                            <label for="fechaInicio"><sup class="obligatorio">*</sup>Fecha de inicio</label>
                                                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio">

                                                            <br>

                                                            <!-- Input fecha de inicio -->
                                                            <label for="fechaFin"><sup class="obligatorio">*</sup>Fecha de cierre</label>
                                                            <input type="date" class="form-control" name="fechaFin" id="fechaFin">
                                                        </div>

                                                        <!-- Select trimestre -->
                                                        <div class="form-group col-md-6">
                                                            <label><sup class="obligatorio">*</sup>Trimestre</label>
                                                            <select id="trimestre" class="form-control">
                                                                <option selected>Elige</option>
                                                                <option>Trimestre I</option>
                                                                <option>Trimestre II</option>
                                                                <option>Trimestre III</option>
                                                                <option>Trimestre IV</option>
                                                                <option>Trimestre V</option>
                                                                <option>Trimestre VI</option>
                                                                <option>Trimestre VII</option>
                                                            </select>
                                                        </div>

                                                        <!-- Select fases -->
                                                        <div class="form-group col-md-6">
                                                            <label><sup class="obligatorio">*</sup>Fases de desarrollo</label>
                                                            <select id="fases" class="form-control">
                                                                <option selected>Elige</option>
                                                                <option>Fases de la entidad Fase...</option>
                                                            </select>
                                                        </div>

                                                        <!-- Select instructores -->
                                                        <div class="form-group col-md-6">
                                                            <label><sup class="obligatorio">*</sup>Instructor</label>
                                                            <select id="instructor" class="form-control">
                                                                <option selected>Elige</option>
                                                                <option>Instructores de seguimiento.</option>
                                                            </select>
                                                        </div>

                                                        <!-- Input archivo de apoyo -->
                                                        <div class="form-group col-md-6">
                                                            <label for="archivo"><sup class="obligatorio">*</sup>Adjunto de apoyo</label>
                                                            <input type="file" class="form-control" name="archivo" id="archivo" placeholder="Adjunto de apoyo">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-cerrar-modal" data-dismiss="modal">Cerrar</button>
                                                        <input type="submit" class="btn btn-crear" value="Crear">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin formulario modal para crear un entregable -->
                            </div>
                        </div>
                    </div>
                    <!-- Content Wrapper (ficha en general) END -->

                    <!-- Footer START -->
                    <footer class="footer">
                        <div class="footer-content">
                            <p class="m-b-0">Copyright © 2021 PROJECTUP. Todos los derechos reservados.</p>
                            <span>
                                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </footer>
                    <!-- Footer END -->

                </div>
                <!-- Page Container END -->
            </div>
        </div>


        <!-- Core Vendors JS -->
        <script src=" {{ asset('js/vendors.min.js') }} "></script>

        <!-- data-table js -->
        <script src=" {{ asset('lib/vendors/datatables/jquery.dataTables.min.js') }} "></script>
        <script src=" {{ asset('lib/vendors/datatables/dataTables.bootstrap.min.js') }} "></script>
        <script src=" {{ asset('js/pages/datatables.js') }} "></script>

        <!-- Core JS -->
        <script src=" {{ asset('js/app.min.js') }} "></script>
</body>

</html>
