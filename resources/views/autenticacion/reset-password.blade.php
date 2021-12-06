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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href=" {{ asset('lib/font-awesome/css/font-awesome.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/animate/animate.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/ionicons/css/ionicons.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('lib/magnific-popup/magnific-popup.css') }} ">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  <!-- Main Stylesheet File -->
  <link href=" {{ asset('css/login2.css') }} " rel="stylesheet">
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
        <div class="login-content" style="margin-left: 425px">
            <form action="{{url('reset-password')}}" method="POST" >
                @csrf
                <p style="text-align: center">
                    <img class="loginImg" src=" {{ asset('assets/img/Logo_login.png') }} " alt="Logo PROJECTUP">
                </p>
                <br>
                <h3 class="title">Cambio de contraseña</h3>
                <br>
                <!-- Input Email -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Correo misena</h5>
                        <input type="text" class="input" id="usuario" name="email" value="{{old('email')}}">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                </div>

                <!-- Input contraseña -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" class="input" id="usuario" name="password" value="{{old('password')}}">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                </div>

                <!-- Input confirmar contraseña -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                    <div class="div">
                        <h5>Confirmar contraseña</h5>
                        <input type="password" class="input" id="usuario" name="password_confirmation">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                </div>
                <input type="hidden" name="token" value="{{ $token }}">
                <br>
                <input type="submit" class="btn" value="Cambiar">
            </form>
        </div>
    </div>
  <script src=" {{ asset('js/formLogin.js') }} "></script>
</body>
</html>
