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
  <link href=" {{ asset('css/login2.css') }} " rel="stylesheet">
</head>

<body>
    <div class="container">

    <div class="cards">

    <div class="imgChida">

    </div>
    <div class="login-content">
      <form action="{{url('enviar-link')}}" method="POST" >
        @csrf
        <p style="text-align: center"><img class="loginImg" src=" {{ asset('assets/img/Logo_login.png') }} " alt="Logo PROJECTUP"></p>
        <br>
        <h3 class="title">Podemos ayudarte a restablecer tu contraseña, primero escribe tu correo y sigue las instrucciones</h3>
        <br>
        @if (session("credenciales_invalidas"))
        <strong class="">{{session('credenciales_invalidas')}}</strong>
        @endif
        <br>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Email</h5>
            <input type="text" class="input" id="usuario" name="email">

          </div>

        </div>
        <strong class="text-danger">{{ $errors->first('email') }}</strong>

        <br>

        <input type="submit" class="btn" value="ENVIAR">

        </form>
    </div>
    </div>
    </div>
          </div>

    </div>
  </div>
  <script src=" {{ asset('js/formLogin.js') }} "></script>
</body>
</div>

</html>
