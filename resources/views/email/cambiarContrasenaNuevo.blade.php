<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'><link rel="stylesheet" href="{{asset('assets/css/email.css')}}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
</head>
<body>
<!-- partial:index.partial.html -->

<div class="wrapper">
  <!-- Contenedor del mensaje -->
  <div class="email-container">
    <!-- Cuerpo del mensaje -->
    <div class="email__body">
        <img class="loginImg" src=" {{ asset('assets/img/Logo_login.png') }} " alt="Logo PROJECTUP">
        <h1 class="body__heading">Bienvenido a Project Up</h1>
        <p class="body__text">Ya casi eres parte de nosotros, solo te falta un paso!🎉</p>
        <p class="body__text">Cambia la contraseña y podrás iniciar sesión en ProjectUp</p>
    </div>

    <!-- Footer del mensaje -->
    <div class="email__footer">
        <a href="{{url('cambiarContrasena/'. $id)}}">
            <button class="footer__button" type="button" value="Read more">
                Cambiar de contraseña
            </button>
        </a>
    </div>
  </div>
</div>



<style>
@import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,700");

*
{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0,0,0,0)}


html {
  font-size: 16px;
}

body {
  line-height: 1.5;
  background: white;
}

.email-container {
  margin-top: 2rem;
  margin-right: auto;
  margin-left: auto;
  overflow: hidden;
  max-width: 37.5rem;
  background: #fff;
  border-radius: 0.125rem;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  transition: box-shadow 0.25s cubic-bezier(0.4, 0, 1, 1);
}
.header__thumbnail {
  max-width: 100%;
  -o-object-fit: fill;
     object-fit: fill;
}

.email__body {
  padding-top: 1rem;
  padding-right: 3rem;
  padding-bottom: 1rem;
  padding-left: 3rem;
}

.body__heading {
  margin-bottom: 0.5rem;
  font-size: 1.3125rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #141414;
}

.body__meta {
  display: inline-block;
  margin-bottom: 0.728rem;
  font-size: 0.8125rem;
  font-weight: 600;
  letter-spacing: 1px;
  color: rgba(20, 20, 20, 0.4);
}

.body__text {
  margin-top: 0;
  margin-bottom: 1.2rem;
  font-size: 0.875rem;
  font-weight: 600;
  letter-spacing: 0.015625rem;
  color: rgba(20, 20, 20, 0.85);
}

.email__footer {
  padding-right: 3rem;
  padding-bottom: 2rem;
  padding-left: 3rem;
  text-align: center;
}

.footer__button {
  display: inline-block;
  padding: 1rem 3rem;
  text-transform: uppercase;
  font-weight: 700;
  color: #fff;
  cursor: pointer;
  background: #FF7A3C;
  border: 0;
  border-radius: 0.125rem;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  white-space: nowrap;
  transition: all 0.25s cubic-bezier(0.4, 0, 1, 1);
}
.footer__button:focus, .footer__button:hover {
  background: #FF9558;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13), 0 1px 3px rgba(0, 0, 0, 0.23);
}
#app-cover
{
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    width: 430px;
    height: 100px;
    margin: -4px auto;
}

#bg-artwork
{
    position: fixed;
    top: -30px;
    right: -30px;
    bottom: -30px;
    left: -30px;
    background-image: url("https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50%;
    filter: blur(40px);
    -webkit-filter: blur(40px);
    z-index: 1;
}

#bg-layer
{
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #fff;
    opacity: 0.51;
    z-index: 2;
}

#player
{
    position: relative;
    height: 100%;
    z-index: 3;
}

#player-track
{
    position: absolute;
    top: 0;
    right: 15px;
    left: 15px;
    padding: 13px 22px 10px 184px;
    background-color: #fff7f7;
    border-radius: 15px 15px 0 0;
    transition: 0.3s ease top;
    z-index: 1;
}

#player-track.active
{
    top: -92px;
}

#album-name
{
    color: #54576f;
    font-size: 17px;
    font-weight: bold;
}

#track-name
{
    color: #acaebd;
    font-size: 13px;
    margin: 2px 0 13px 0;
}

#track-time
{
    height: 12px;
    margin-bottom: 3px;
    overflow: hidden;
}

#current-time
{
    float: left;
}

#track-length
{
    float: right;
}

#current-time, #track-length
{
    color: transparent;
    font-size: 11px;
    background-color: #ffe8ee;
    border-radius: 10px;
    transition: 0.3s ease all;
}

#track-time.active #current-time, #track-time.active #track-length
{
    color: #f86d92;
    background-color: transparent;
}

#s-area, #seek-bar
{
    position: relative;
    height: 4px;
    border-radius: 4px;
}

#s-area
{
    background-color:#ffe8ee;
    cursor: pointer;
}

#ins-time
{
    position: absolute;
    top: -29px;
    color: #fff;
    font-size: 12px;
    white-space: pre;
    padding: 5px 6px;
    border-radius: 4px;
	display:none;
}

#s-hover
{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    opacity: 0.2;
    z-index: 2;
}

#ins-time, #s-hover
{
    background-color: #3b3d50;
}

#seek-bar
{
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 0;
    background-color: #fd6d94;
    transition: 0.2s ease width;
    z-index: 1;
}

#player-content
{
    position: relative;
    height: 100%;
    background-color: #fff;
    box-shadow: 0 30px 80px #656565;
    border-radius: 15px;
    z-index: 2;
}

#album-art
{
    position: absolute;
    top: -40px;
    width: 115px;
    height: 115px;
    margin-left: 40px;
    transform: rotateZ(0);
    transition: 0.3s ease all;
    box-shadow: 0 0 0 10px #fff;
    border-radius: 50%;
    overflow: hidden;
}

#album-art.active
{
    top: -60px;
    box-shadow: 0 0 0 4px #fff7f7, 0 30px 50px -15px #afb7c1;
}

#album-art:before
{
    content: '';
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    width: 20px;
    height: 20px;
    margin: -10px auto 0 auto;
    background-color: #d6dee7;
    border-radius: 50%;
    box-shadow: inset 0 0 0 2px #fff;
    z-index: 2;
}

#album-art img
{
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: -1;
}

#album-art img.active
{
    opacity: 1;
    z-index: 1;
}

#album-art.active img.active
{
    z-index: 1;
    -webkit-animation: rotateAlbumArt 3s linear 0s infinite forwards;
            animation: rotateAlbumArt 3s linear 0s infinite forwards;
}

@-webkit-keyframes rotateAlbumArt
{
    0%{ transform: rotateZ(0); }
    100%{ transform: rotateZ(360deg); }
}

@keyframes rotateAlbumArt
{
    0%{ transform: rotateZ(0); }
    100%{ transform: rotateZ(360deg); }
}

#buffer-box
{
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    height: 13px;
    color: #1f1f1f;
    font-size: 13px;
    font-family: Helvetica;
    text-align: center;
    font-weight: bold;
    line-height: 1;
    padding: 6px;
    margin: -12px auto 0 auto;
    background-color: rgba(255, 255, 255, 0.19);
    opacity: 0;
    z-index: 2;
}

#album-art img, #buffer-box
{
    transition: 0.1s linear all;
}

#album-art.buffering img
{
    opacity: 0.25;
}

#album-art.buffering img.active
{
    opacity: 0.8;
    filter: blur(2px);
    -webkit-filter: blur(2px);
}

#album-art.buffering #buffer-box
{
    opacity: 1;
}

#player-controls
{
    width: 250px;
    height: 100%;
    margin: 0 5px 0 141px;
    float: right;
    overflow: hidden;
}

.control
{
    width: 33.333%;
    float: left;
    padding: 12px 0;
}

.button
{
    width: 26px;
    height: 26px;
    padding: 25px;
    background-color: #fff;
    border-radius: 6px;
    cursor: pointer;
}

.button i
{
    display: block;
    color: #d6dee7;
    font-size: 26px;
    text-align: center;
    line-height: 1;
}

.button, .button i
{
    transition: 0.2s ease all;
}

.button:hover
{
    background-color: #d6d6de;
}

.button:hover i
{
    color: #fff;
}

#ytd-url {
  display: block;
  position: fixed;
  right: 0;
  bottom: 0;
  padding: 10px 14px;
  margin: 20px;
  color: #fff;
  font-size: 14px;
  text-decoration: none;
  background-color: #ae5f87;
  border-radius: 4px;
  box-shadow: 0 10px 20px -5px rgba(174, 95, 135, 0.86);
  z-index: 125;
}
.loginImg{
margin-left: 27%
}
</style>
</body>
</html>
