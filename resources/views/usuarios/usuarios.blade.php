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
                        <img class="logo-fold" src=" {{ asset('assets/img/logo/icono.svg') }} " alt="Icono ProjectUp" width="60px" height="60px">
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
                                    <img src=" {{ asset('assets/img/avatars/logo-sena.png') }} " alt="Logo SENA">
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
                        <li class="nav-item dropdown open">
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
                                <li>
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


                <!-- Content Wrapper (data table) START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Usuarios</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.html" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <span class="breadcrumb-item active">Usuarios</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Usuarios</h4>
                            <div class="row">
                                <div class="col-md-2 ml-auto">
                                    <button class="btn btn-agregar-usuario" data-toggle="modal"
                                        data-target=".modal-carga-masiva">
                                        <i class="anticon anticon-upload"></i> Carga masiva
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-agregar-usuario" href="nuevoUsuario.html">
                                        <i class="anticon anticon-plus"></i> Nuevo usuario
                                    </a>
                                </div>
                            </div>
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
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
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
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
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
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
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
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                            <td>Activo</td>
                                            <td>Null</td>
                                            <td>
                                                <a class="btn btn-info" href="#modificar" title="Modificar">
                                                    <i class="anticon anticon-form" title="Modificar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
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

                            <!-- Modal para cargar aprendices -->
                            <div class="modal fade modal-carga-masiva" id="modalCargaMasiva">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title" id="modalCargaLabel">Cargar aprendices</h1>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" method="POST">
                                                <div class="form-row">
                                                    <!-- Input cargar arcivo -->
                                                    <div class="form-group col-md-10">
                                                        <label for="archivo"><sup class="obligatorio">*</sup>Archivo
                                                            (Excel <i
                                                                class="anticon anticon-file-excel text-success"></i>)</label>
                                                        <input type="file" class="form-control" name="archivo"
                                                            id="archivo" placeholder="Archivo Excel">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-cerrar-modal"
                                                        data-dismiss="modal">Cerrar</button>
                                                    <input type="submit" class="btn btn-crear" value="Subir">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin modal -->

                        </div>
                    </div>
                    <div>
                        <!-- Content Wrapper (data table) END -->

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
