<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2>Modificar zapa</h2>
    </div>
    
    <div class="row">
        <div class="col-md-8 offset-md-2 order-md-1">
            
            <form method="post" action="{{route('cambiozapa')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_zapa" value="{{$unaZapa->id_zapa}}">
                <div class="form-group mb-3">
                    <label for="__input-modelo">Modelo</label>
                    @foreach($modelos as $mo)
                            @if($mo->id_modelo == $unaZapa->id_modelo)
                                <input type="text" name="modelo" class="form-control" id="__input-modelo" value="{{$mo->modelo}}">
                            @endif
                        @endforeach
                </div>

                <div class="form-group">
                    <label for="__input-marca">Marca</label>
                    <select class="form-control" name="marca" id="__input-marca">
                        @foreach($marcas as $m)
                            @if($m->id_marca == $unaZapa->id_marca)
                                <option selected value="{{$m->id_marca}}">{{$m->nombre}}</option>
                            @else
                                <option value="{{$m->id_marca}}">{{$m->nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group mb-3">
                    <label for="__input-stock">Stock</label>
                    <input type="text" name="stock" class="form-control" id="__input-stock" value="{{$unaZapa->stock}}">
                </div>
                
                <div class="form-group">
                    <label for="__input-color">Color</label>
                    <select class="form-control" name="color" id="__input-color" value="{{$unaZapa->id_color}}">
                        @foreach($colores as $c)
                            @if($c->id_color == $unaZapa->id_color)
                                <option selected value="{{$c->id_color}}">{{$c->color}}</option>
                            @else
                                <option value="{{$c->id_color}}">{{$c->color}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="__input-talle">Talle</label>
                    <select class="form-control" name="talle" id="__input-talle" value="{{$unaZapa->id_talle}}">
                        @foreach($talles as $t)
                            @if($t->id_talle == $unaZapa->id_talle)
                                <option selected value="{{$t->id_talle}}">{{$t->numero}}</option>
                            @else
                                <option value="{{$t->id_talle}}">{{$t->numero}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="__input-precio">Precio Unitario</label>
                    <input type="text" name="precio_unit" class="form-control" id="__input-precio_unit" value="{{$unaZapa->precio_unit}}">
                </div>            
                
                
                <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar cambios</button>
                <button class="btn-danger btn-lg btn-block"><a class="text-white" href="javascript:history.back()"> Cancelar</a></button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

