@extends('template.layout-main')

@section('content')
<main class="col contacto-back">
    <div class="row">
            <div class="col-12 px-5">
                <div class="row justify-content-center">
                    <div class="pb-3">
                        <h1 class="text-white pt-5">Contactanos</h1>
                    </div>
                </div>
                <form action="">
                    <div class="form-group row justify-content-center">
                        <div class="col-12 col-md-6 pb-3">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-12 col-md-6 pb-3">
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-12 col-md-6 pb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-12 col-md-6 pb-3">
                            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Deje aquí su mensaje..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 pb-3">
                                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>   
    </div>
</main>
@endsection