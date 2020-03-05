@extends('template.layout-main')

@section('content')

<main class="main col">
    <div class="row" style="align:center;">
          <div class="row">
          <img src="{{ asset('img/producto/zapa_1.jpeg') }}" id="muestra" alt="puma" style="margin-left:275px;margin-right:180px">
          <div class="card" style="width: 18rem;" id="descrip">
              <div class="card-body">
                <span><img  src="{{ asset('img/producto/puma.png') }}" alt="puma"></span>
                <h5 class="card-title">Zapatillas Vikky Stck mujer</h5>
                <span>
                  <span class="pre"> $4.299 </span><br>
                  <a href="#" class="badge badge-info">Calcula el valor de tus cuotas</a></span>
                <p class="card-text"></p>
                  <form class="form-inline">
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Talle
                      </label>
                      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Elegí tu talle</option>
                        <option value="6">36</option>
                        <option value="7">37</option>
                        <option value="8">38</option>
                        <option value="9">39</option>
                      </select>
                  </form>
                  <span><br> Color </span>
                  <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active" id="negro">
                      <input type="checkbox" checked>
                    </label>
                    <label class="btn btn-secondary active" id="blanco">
                      <input type="checkbox" checked>
                    </label>
                  </div><br>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">-</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                      <span class="input-group-text">+</span>
                    </div>
                  </div>
                <a href="#" class="btn btn-primary" id="carrito">
                  Agregar al Carrito <img src="{{ asset('img/producto/carro-de-la-compra.png') }}" alt="carrito" style="width:25px">
                </a>
              </div>
            </div>
          </div>
          <div class="col-8 offset-2">
            <div class="jumbotron jumbotron-fluid" id="detalle">
              <div class="container">
                <h1 class="display-4">Especificaciones</h1>
                <p class="lead">
                  <table class="table table-striped">

                    <tbody>
                      <tr>
                        <th scope="row">Modelo: </th>
                        <td>370280/01</td>
                      </tr>
                      <tr>
                        <th scope="row">Género</th>
                        <td>Mujer</td>
                      </tr>
                      <tr>
                        <th scope="row">Tipo</th>
                        <td>Zapatillas Urbanas</td>
                      </tr>
                      <tr>
                        <th scope="row">Material</th>
                        <td>Sintético</td>
                      </tr>
                      <tr>
                        <th scope="row">Material de la suela</th>
                        <td>Goma</td>
                      </tr>
                      <tr>
                        <th scope="row">Material del forro</th>
                        <td>Textil</td>
                      </tr>
                      <tr>
                        <th scope="row">Temporada</th>
                        <td>Toda la temporada</td>
                      </tr>
                      <tr>
                        <th scope="row">Origen</th>
                        <td>Vietnam</td>
                      </tr>
                    </tbody>
                  </table>
                </p>
              </div>
            </div>
          </div>
      </div>
</div>
</div>

    </div>
</main>

@endsection
