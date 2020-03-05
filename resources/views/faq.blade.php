@extends('template.layout-main')

@section('content')

<main class="main col">
    <div class="row" style="align:center;">
        <h1 class="col-8 offset-2">Preguntas frecuentes</h1>
        <div class="accordion col-8 offset-2" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne" style="background-color:#262A34">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color:white;">
                  ¿CÓMO COMPRAR EN ZAPAS?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <strong>1. ELEGÍ LOS PRODUCTOS.</strong> Podés buscar productos desde el menú superior de categorías. Una vez que ingresaste a la grilla de productos, podés filtrar la búsqueda por marca, género, disciplina, etc desde el menú lateral izquierdo. Si buscás un producto en particular, podés ingresar el nombre o código en el buscador principal que se encuentra en el sector superior derecho.
                <br>
                <strong>2. SELECCIONÁ LO QUE QUERÉS Y AGREGALO A TU CARRITO.</strong> Hace click sobre el producto que querés comprar. Seleccioná el color, talle y cantidad deseada. Presioná el botón "Comprar". Podés agregar más productos a la compra o clickear en el botón del carrito en el sector superior derecho para finalizar tu compra.
                <br>
                <strong>3. TU CARRITO.</strong> Una vez en el carrito chequeá que los productos que están son los que elegiste y avanzá al checkout presionando el botón "Finalizar Compra".
                <br>
                <strong>4. DATOS DE FACTURACIÓN.</strong> Finalmente deberás completar los datos que te vamos solicitando: datos personales, dirección de entrega, modo de envío, forma de pago.
                <br>
                Y listo! Ahora solo resta esperar a que llegue tu pedido.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo" style="background-color:#262A34">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:white;">
                  ¿CUÁNTO TARDA EN LLEGAR MI PRODUCTO?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                El tiempo de entrega depende de la disponibilidad del producto, del tiempo de envío y de la aprobación del medio de pago. Los días que se indiquen son estimativos, y corren siempre a partir del momento en que el pedido se despacha. Los envíos se realizan en toda la República Argentina, excepto la provincia de Tierra del Fuego.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree" style="background-color:#262A34">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:white;">
                  ¿CÓMO SE REALIZAN LAS ENTREGAS?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Las entregas se realizan a través de correo Andreani, e-Trans o Urbano. Los pedidos salen de nuestro depósito con bolsas inviolables, al recibir tu compra verificá que el envoltorio no esté adulterado. En el caso que percibas algún problema no aceptes la recepción del mismo.
              </div>
            </div>
          </div>

        <div class="card">
          <div class="card-header" id="headingFour" style="background-color:#262A34">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color:white;">
                ¿PUEDE RECIBIR MI PEDIDO OTRA PERSONA?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              Puede recibirlo cualquier persona, mayor de 18 años, que se encuentre en el domicilio acordado, presentando documento de identidad.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive" style="background-color:#262A34;">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color:white;">
                ¿CÓMO RETIRAR MI PEDIDO EN UNA SUCURSAL?
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              Para poder retirar un pedido enviado a alguna de nuestras sucursales se debe cumplir con los siguientes requisitos, caso contrario NO se entregará el mismo:<br>

              <strong>Retira el titular de la compra:</strong><br>
              -DNI del TITULAR de la compra.<br>
              -Factura de compra impresa (enviada a su email) o número de pedido.<br>

              <strong>Retira un tercero</strong><br>
              -Autorización escrita de puño y letra del TITULAR de la compra (únicamente 18 años)<br>
              -DNI del tercero autorizado.<br>
              -Factura de compra impresa o número de pedido.<br>
              -Fotocopia del DNI del titular de la compra.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSix" style="background-color:#262A34">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color:white;font-family:'Roboto',sans-serif;;">
                DÍAS Y HORARIOS DE ENTREGA
              </button>
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
              Las entregas de pedidos se realizan de lunes a viernes de 9:00 hs. a 18:00 hs. y los sábados de 9 a 12hs. No se entregan pedidos los días domingo ni feriados.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSeven" style="background-color:#262A34">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="color:white;">
                TIEMPO PARA REALIZAR CAMBIO
              </button>
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
              Tenés hasta 30 (treinta) días consecutivos desde la recepción del producto para realizar el cambio deseado. El producto adquirido debe presentar las mismas condiciones en las que fue recibido o comprado, en perfectas condiciones, etiqueta y envoltorio original. Para hacer efectivo el cambio es obligatorio llevar la factura impresa.
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>
    </main>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
      </div>
  </body>
</html>
@endsection
