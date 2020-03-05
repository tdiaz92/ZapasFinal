@extends('template.layout-main')
@section('content')

<main class="mainInicio col">
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color barraInicio">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img height="50" width="100" src={{ asset('/img/footer/logoFooter-blanco.png') }} alt=""></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Deportivo
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Urbano</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Formal</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Trabajo</a>
          </li>

        <!-- Dropdown -->
        <li style="cursor: pointer;" class="nav-item dropdown">
        </li>

      </ul>
      <!-- Links -->

      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->

  <div class="row contenedorImagen">
      <img class="imagenMarca" src="{{ asset('/img/inicio/zapasHome.png') }}" alt="logo zapas">
  </div>

  <div class="row contenedorBoton">
    <button type="button" class="btn btn-outline-light">Explorar</button>
  </div>

  <div class="row contenedorCards">
      <div class="col-4" >
        <!-- Card -->
<div class="card">

    <!-- Card image -->
    <img class="card-img-top"  src="https://essential.vteximg.com.br/arquivos/ids/254432-1000-1000/261-0312_1.jpg?v=636973399042430000" alt="Card image cap">

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title"><a>Adidas</a></h4>

      <!-- Button -->
      <a href="#" class="btn btn-primary">Ver más</a>

    </div>

  </div>
  <!-- Card -->
      </div>
      <div class="col-4" >
          <!-- Card -->
<div class="card">

    <!-- Card image -->
    <img class="card-img-top" src="https://essential.vteximg.com.br/arquivos/ids/271463-1000-1000/931-5069_1.jpg?v=637020041083570000" alt="Card image cap">

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title"><a>Under Armour</a></h4>

      <!-- Button -->
      <a href="#" class="btn btn-primary">Ver más</a>

    </div>

  </div>
  <!-- Card -->
      </div>
      <div class="col-4" >
          <!-- Card -->
<div class="card">

    <!-- Card image -->
    <img class="card-img-top" src="https://static.netshoes.com.ar/produtos/zapatillas-nike-air-max-guile/59/001-4188-059/001-4188-059_zoom1.jpg" alt="Card image cap">

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title"><a>Nike</a></h4>

      <!-- Button -->
      <a href="#" class="btn btn-primary">Ver más</a>

    </div>

  </div>
  <!-- Card -->
      </div>
  </div>

</main>

@endsection
