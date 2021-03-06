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
  <link href=" {{ asset('assets/img/iconP.png') }} " rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
    rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href=" {{ asset('lib/font-awesome/css/font-awesome.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/animate/animate.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/ionicons/css/ionicons.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/magnific-popup/magnific-popup.css') }} ">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  <!-- Main Stylesheet File -->
  <link href=" {{ asset('css/login.css') }} " rel="stylesheet">
  <style>
      .div strong {
        color: red;
        position: relative;
        top: 53px;
        float: left;
      }
  </style>
</head>

<body>
  <div class="container">
    <div class="imgChida">
      <img src="{{ asset('assets/img/FDS.svg') }} " alt="Asignación de tareas en un tablero">
    </div>
    <div class="login-content">
      <form action="{{url('login')}}" method="POST" >
        @csrf
        <a href="{{url('inicio')}}" style="display: inline">
        <img class="loginImg" src=" {{ asset('assets/img/Logo_login.png') }}" alt="Logo PROJECTUP">
        </a>
        <h3 class="title">INICIAR SESIÓN</h3>
        @if (session("credenciales_invalidas"))
        <strong style="color: red">{{session('credenciales_invalidas')}}</strong>
        @endif
        @if (session("mensaje_exito"))
        <strong id="mensajeExito" style="color: green">{{session('mensaje_exito')}}</strong>
        @endif
        <br>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Usuario</h5>
            <input type="text" class="input" id="usuario" name="correo">
            <strong> {{$errors->first('correo')}} </strong>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Contraseña</h5>
            <input type="password" class="input" id="contrasena" name="contrasena">
            <strong> {{$errors->first('contrasena')}} </strong>
          </div>
        </div>
        <br>
        <a href="{{url('recuperar-password')}}">Olvidaste la contraseña?</a>
        <input type="submit" class="btn" value="INGRESAR">
        <p id="error" style="color: black;"></p>
      </form>
    </div>
  </div>
  <script src=" {{ asset('js/formLogin.js') }} "></script>
  <script src=" {{ asset('js/cerrarMensajes.js') }} "></script>
</body>

</html>
