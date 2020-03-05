<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontello.css') }}">
</head>
<body class="body-perfil">
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <div class="logo">
                    <h2>Zapas</h2>
                </div>
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="home"><i class="icon-home"></i><span>Inicio</span></a>
                    <a href="perfil"><i class="icon-user-o"></i><span>Perfil</span></a>
                    <a href="register"><i class="icon-user-plus"></i><span>Registro</span></a>
                    <a href="login"><i class="icon-login"></i><span>Login</span></a>
                    <a href="contacto"><i class="icon-mail-alt"></i><span>Contacto</span></a>
                    <a href="#"><i class="icon-basket"></i><span>Carrito</span></a>
                    <a href="faq"><i class="icon-chat-empty"></i><span>F.A.Q</span></a>
                    <a href="{{ url('/logout') }}"><i class="icon-logout"></i><span>Salir</span></a>
                </nav>
            </div>


            @yield('content')


        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
