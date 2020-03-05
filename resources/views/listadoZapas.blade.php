
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
    <button class="btn-success mt-3 mb-3"><a class="text-white" href="admin/nueva">Agregar zapa</a></button>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Stock</th>
                <th>Color</th>
                <th>Talle</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
    @foreach($listadoZapas as $zapa)
        
            <tr>
                <td>{{$zapa->id_zapa}}</td>
                
                <td>
                    @foreach ($zapa->modelo as $m)
                        {{$m->modelo}}
                    @endforeach
                </td>
                
                <td>{{$zapa->stock}}</td>
                <td>
                    @foreach ($zapa->color as $c)
                        {{$c->color}}
                    @endforeach
                </td>
                <td>
                    @foreach ($zapa->talle as $t)
                        {{$t->numero}}
                    @endforeach
                </td>
                <td>{{$zapa->precio_unit}}</td>
                <td>
                @foreach ($zapa->modelo as $m)
                        {{$m->marca->nombre}}
                    @endforeach
                </td>
                <td>
                
                    
                <button class="btn-primary"><a class="text-white" href="admin/{{ $zapa->id_zapa }}">Seleccionar</a></button> 
                <button class="btn-danger mr-2"><a class="text-white" href="admin/borrar/{{ $zapa->id_zapa }}" class="text-danger">Borrar</a>
                
                </td>
            </tr>
    @endforeach
    </table>
</div>
</body>
</html>