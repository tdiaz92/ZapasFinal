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
        <h2>Nueva zapa</h2>
    </div>
    
    <div class="row">
        <div class="col-md-8 offset-md-2 order-md-1">
            <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                    <label for="__input-modelo">Modelo</label>
                    <input type="text" name="modelo" class="form-control" id="__input-modelo" value="{{old("modelo")}}">
                </div>

                <div class="form-group">
                    <label for="__input-marca">Marca</label>
                    <select class="form-control" name="marca" id="__input-marca" value="{{old("marca")}}">
                        <option value="">Elegir una marca</option>
                        <option value="1">Nike</option>
                        <option value="2">Adidas</option>
                    </select>
                </div>
                
                <div class="form-group mb-3">
                    <label for="__input-stock">Stock</label>
                    <input type="text" name="stock" class="form-control" id="__input-stock" value="{{old("stock")}}">
                </div>
                
                <div class="form-group">
                    <label for="__input-color">Color</label>
                    <select class="form-control" name="color" id="__input-color" value="{{old("color")}}">
                        <option value="">Elegir un color</option>
                        <option value="1">Rojo</option>
                        <option value="3">Azul</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="__input-talle">Talle</label>
                    <select class="form-control" name="talle" id="__input-talle" value="{{old("talle")}}">
                        <option value="">Elegir un talle</option>
                        <option value="1">43</option>
                        <option value="2">45</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="__input-precio">Precio Unitario</label>
                    <input type="text" name="precio_unit" class="form-control" id="__input-precio_unit" value="{{old("precio_unit")}}">
                </div>
                
                
                <div class="form-group">
                    <label for="__input-imagen">Cargar imagen</label>
                    <input type="file" name="imagen" class="form-control-file" id="__input-imagen">
                </div>              
                
                <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar zapa</button>
                <button class="btn-danger btn-lg btn-block"><a class="text-white" href="javascript:history.back()"> Volver Atrás</a></button>
            </form>
        </div>
    </div>
</div>
</body>
</html>


