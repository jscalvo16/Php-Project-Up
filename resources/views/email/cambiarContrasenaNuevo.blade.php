<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }

        .contenedor {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cuerpoEmail, .titulo, .texto {
            justify-content: center;
            align-items: center;
        }

        img {
            margin-bottom: 10px;
        }

        a {
            outline: none;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="container">
            <div class="row">
                <div class="titulo">
                    <img src="{{ asset('assets/img/logo-sena.png') }}" width="200" height="200">
                </div>
                <div class="cuerpoEmail">
                    <div class="titulo">
                        <h1>Eres parte de nosotros!!</h1>
                    </div>
                    <div class="texto">
                        <h3>
                            Cambia la contraseña e inicia sesión: <a href="{{ url('chagePassword', $idUser) }}">Cambiar contraseña</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
