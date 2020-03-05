@extends('template.layout-main')

@section('content')
<main class="col back-color">
    <div class="row">
        <div class="columna col-lg-12 px-5">
            <div class="row justify-content-center">
                <div class="pb-10 pt-5">
                    <h1 class="text-white pb-4">Completa tus datos</h1>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="registro" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group row justify-content-center">
                    <div class="col-12 col-md-6 pb-3">
                        <input type="text" class="form-control text-dark" placeholder="Nombre" name="nombre" id="nombre" value="{{old("nombre")}}">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-12 col-md-6 pb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{old("email")}}">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-12 col-md-6 pb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-12 col-md-6 pb-3">
                        <input type="password" class="form-control" placeholder="Repetir contraseña" name="repass" id="repass">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-12 col-md-6 pb-3">
                        <input type="file" name="avatar" id="avatar" value="{{old("avatar")}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-12 text-center">
                        <label class="form-check-label">
                            <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">Acepto términos y condiciones
                        </label>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4">
                                <button class="btn btn-success btn-block mt-3" type="submit">Registrarme</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection