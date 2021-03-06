<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>ProjectUp</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="SENA">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/iconP.png') }} " rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href=" {{ asset('lib/bootstrap/css/bootstrap.min.css') }} ">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href=" {{ asset('lib/font-awesome/css/font-awesome.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/animate/animate.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/ionicons/css/ionicons.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/magnific-popup/magnific-popup.css') }} ">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href=" {{ asset('css/index.css') }} ">
</head>

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{url('inicio')}}" id="body" class="scrollto">
            <img src=" {{ asset('assets/img/Logo2.png') }} " class="logoImportante" alt="Logo ProjectUp">
        </h1>
        <div id="divisor"></div>
        <div class="sublogo">
          <img src=" {{ asset('assets/img/logo-sena.png') }} " alt="Logo SENA">
        </div>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">INICIO</a></li>
          <li><a href="#aboutUs">ACERCA DE PROJECTUP</a></li>
          <li><a href="#services">FUNCIONALIDADES</a></li>
          <li><a href="#clients">M??DULOS</a></li>
          <li><a href="#contacto">CONT??CTANOS</a></li>
          <li><a href=" {{ url('login') }} ">INICIAR SESI??N</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="clearfix">
    <div class="container">

      <div class="hero-banner">
        <img src=" {{ asset('assets/img/INDEX.svg') }} " alt="Checklist" class="img-fluid">
      </div>

      <div class="hero-content">
        <h2>Seguimineto de proyectos<br><span>ADSI</span></h2>

      </div>

    </div>
  </section><!-- #Hero -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <br>
    <p id="aboutUs"></p>
    <br>
    <br>
    <br>
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>PROJECTUP</h2>
          <p>
            Es un sistema de informacion para la gesti??n y el control de los avances en los proyectos
            formativos de los aprendices ADSI (An??lisis y Desarrollo de Sistemas de Informaci??n) en el CGMLTI SENA,
            permite:
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src=" {{ asset('assets/img/INDEX2.svg') }} " alt="Index imagen 2">
          </div>

          <div class="col-lg-6 content">
            <ul>
              <li><i class="icon ion-ios-checkmark-outline"></i> Control total de los proyectos de los aprendices.</li>
              <li><i class="icon ion-ios-checkmark-outline"></i> Asociaci??n l??gica entre m??dulos y fases de desarrollo
                de software.</li>
              <li><i class="icon ion-ios-checkmark-outline"></i> Comunicaci??n m??s activa entre los usuarios.</li>
              <li><i class="icon ion-ios-checkmark-outline"></i> Retroalimentaciones permanentes en el sistema.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>FUNCIONALIDADES</h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/AVANCES.svg') }} " alt="Subir avances"></div>
              <h4 class="title">Carga de avances</h4>
              <p class="description">Los aprendices pueden subir los avances de su proyecto a la plataforma.
                Estos avances pertenecen a una fase de desarrollo de software, para acercar al aprendiz a este proceso.
              </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/REVIEW.svg') }} " alt="Revisiones"></div>
              <h4 class="title">Revisiones</h4>
              <p class="description">Los instructores tiene la capacidad de revisar los documentos subidos por los
                aprendices.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/OBSERVACION.svg') }} " alt="Retroalimentaciones"></div>
              <h4 class="title">Retroalimenci??n y respuesta</h4>
              <p class="description">Los instructores pueden comentar los avacnes de los proyectos y los aprendices
                podr??n responder a estas observaciones.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/REPORTS.svg') }} " alt="Reportes"></div>
              <h4 class="title">Reportes</h4>
              <p class="description">El sistema puede generar reportes para que los instructores conozcan el nivel de la
                ficha seg??n avancen los grupos de proyecto.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/EMAIL.svg') }} " alt="Reportes"></div>
              <h4 class="title">Avisos</h4>
              <p class="description">Las observaciones se dar??n a cononcer a trav??s de una notificaci??n via correo
                electr??nico a los aprendices.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/UNICO.svg') }} " alt="Reportes"></div>
              <h4 class="title">??nica plataforma</h4>
              <p class="description">El seguimento de los avances y evidencias se podr??n realizar en una ??nica
                plataforma, no habr?? necesidad de p??blicar los documentos en alguna otra.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>M??DULOS</h2>
          <p>PROJECTUP est?? organizado por m??dulos que mantiene el nivel organizativo en el SENA</p>
        </div>

        <div class="modulos">
          <div class="col-lg-4">
            <div class="modulo wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/USUARIOS2.svg') }} " alt="Usuarios"></div>
              <h4 class="title">Usuarios</h4>
              <p class="description">Vincular usuarios a sus ??reas dentro del sistema garantizando las gesti??n de sus
                tareas.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="modulo wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/FICHAS.svg') }} " alt="Fichas"></div>
              <h4 class="title">Fichas de caracterizaci??n</h4>
              <p class="description">Representa las fichas que el SENA establece para organizar a los aprendices e instructores.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="modulo wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/GRUPOS.svg') }} " alt="Grupos"></div>
              <h4 class="title">Grupos de proyecto</h4>
              <p class="description">Representan los grupos de trabajo, quienes trabajan en su proyecto formativo.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="modulo wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/ENTREAVAN.svg') }} " alt="Avances"></div>
              <h4 class="title">Entregables y avances</h4>
              <p class="description">Espacios que contendr?? los avances cargados por los integrantes de un grupo de proyecto.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="modulo wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/RETRORESP.svg') }} " alt="Retroalimentaciones"></div>
              <h4 class="title">Retroalimenci??n y respuesta</h4>
              <p class="description">Se encuentran las retroalimentaciones dadas por el instructor y las respuestas los aprendices.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="modulo wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon svgImg"><img src=" {{ asset('assets/img/REPORTS.svg') }} " alt="Reportes"></div>
              <h4 class="title">Reportes</h4>
              <p class="description">Contiene los reportes generados y permite su administraci??n.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Ventajas</h2>
          <p>
            Beneficios de utilizar PROJECTUP
          </p>
        </div>

        <div class="col-lg-6 content ventajas">
          <ul>
            <li><i class="icon ion-ios-checkmark-outline"></i> Organizaci??n por fichas de caracterizaci??n.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Seguimiento en una ??nica plataforma.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Proyectos finales permanentes en el sistema.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Retroalimentaciones a la mano.</li>
          </ul>
        </div>
        <div class="col-lg-6 content ventajas2">
          <ul>
            <li><i class="icon ion-ios-checkmark-outline"></i> Reportes de los avances por fichas.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Fichas compuestas por grupos de proyecto.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Notificaci??n por correo electr??nico de las
              retroalimentaciones.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Divisi??n de los entregables por fases de desarrollo de
              software.</li>
          </ul>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
    Page Banner Section
  ============================-->
    <p id="contacto"></p>
    <br>
    <br>
    <br>
    <br>
    <section id="innerBanner">
      <div class="inner-content">
        <h2><span>Cont??ctanos</span><br><br>SENA una entidad de formaci??n profesional al alcance de todos</h2>
        <div>
        </div>
      </div>
    </section><!-- #Page Banner -->




    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">

        <div class="row contact-info">
          <div class="col-lg-5">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Direcci??n</h3>
              <address>Chapinero: Cl. 52 #13 65, Bogot??</address>
            </div>
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>N??meros de contacto</h3>
              <p>Ciudadano: Bogot?? (57 1) 3430111</p>
              <p>Empresario: Bogot?? (57 1) 3430101</p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="container">
              <div class="form">

                <!-- Form itself -->
                <form action="#" name="sentMessage" class="well" id="contactForm" novalidate>
                  <div class="control-group">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nombre completo" id="name" required
                        data-validation-required-message="Please enter your name" />
                      <p class="help-block"></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <input type="email" class="form-control" placeholder="Correo electr??nico" id="email" required
                        data-validation-required-message="Please enter your email" />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <textarea rows="10" cols="100" class="form-control" placeholder="Mensaje" id="message" required
                        data-validation-required-message="Please enter your message" minlength="5"
                        data-validation-minlength-message="Min 5 characters" maxlength="999"
                        style="resize:none"></textarea>
                    </div>
                  </div>
                  <div id="success"> </div> <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-primary pull-right">Enviar</button><br />
                </form>
              </div>

            </div>
          </div>


        </div>
      </div>

      <div class="container mb-4 map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15906.988282479728!2d-74.0661724!3d4.6391484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4347f67e96f6d8b!2sSENA%20CGMLTI!5e0!3m2!1ses!2sco!4v1630454211903!5m2!1ses!2sco"
          width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>

    </section><!-- #contact -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer>
    <div class="partFooter">
      <p><strong>&copy;Copyright Projectup <br> Derechos reservados 2021</strong></p>
    </div>

    <div class="logoFooter">
      <img src=" {{ asset('assets/img/LogoEnteroBlanco.png') }} " alt="Logo projectup">
    </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript  -->
  <script src=" {{ asset('lib/jquery/jquery.min.js') }} "></script>
  <script src=" {{ asset('lib/jquery/jquery-migrate.min.js') }} "></script>
  <script src=" {{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src=" {{ asset('lib/easing/easing.min.js') }} "></script>
  <script src=" {{ asset('lib/superfish/hoverIntent.js') }} "></script>
  <script src=" {{ asset('lib/superfish/superfish.min.js') }} "></script>
  <script src=" {{ asset('lib/wow/wow.min.js') }} "></script>
  <script src=" {{ asset('lib/owlcarousel/owl.carousel.min.js') }} "></script>
  <script src=" {{ asset('lib/magnific-popup/magnific-popup.min.js') }} "></script>
  <script src=" {{ asset('lib/sticky/sticky.js') }} "></script>
  <script src=" {{ asset('js/index.js') }} "></script>
</body>

</html>
