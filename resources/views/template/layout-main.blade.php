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
    <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div id="contFooter">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0 titFooter">¡Conéctate con nosotros en las redes sociales!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
          <a class="fb-ic iconFooter" href="http://facebook.com" >
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>


            </a>
            <!-- Twitter -->
            <a class="tw-ic iconFooter" href="http://twitter.com" >
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic iconFooter" href="http://gmail.com">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic iconFooter" href="http://linkedin.com">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a  class="ins-ic iconFooter" href="http://instragram.com">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Nombre de la compañía</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

          <img src={{ asset('/img/footer/logoFooter.png') }} alt="">

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Productos</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="linkFooter" href="#!">Zapatillas deportivas</a>
          </p>
          <p>
            <a class="linkFooter" href="#!">Zapatillas urbanas</a>
          </p>
          <p>
            <a class="linkFooter" href="#!">Calzado formal</a>
          </p>
          <p>
            <a class="linkFooter" href="#!">Calzado para trabajar</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Enlaces útiles</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="linkFooter" href="#!">Su cuenta</a>
          </p>
          <p>
            <a class="linkFooter" href="#!">Hazte afiliado</a>
          </p>
          <p>
            <a class="linkFooter" href="#!">Tarifas de envio</a>
          </p>
          <p>
            <a class="linkFooter" href="#!">Ayuda</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contacto</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> Córdoba,Córdoba (ARG)</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@zapas.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 54 351 567 79</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 54 351 345 03</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="# text-center py-3">© 2020 Zapas:
      <a href="#"> Zapas.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
