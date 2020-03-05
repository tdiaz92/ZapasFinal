@extends('template.layout-main')

@section('content')
<main class="main col">
    <div class="row">
        <div class="columna col-lg-7">
            <div class="widget">
                <h3 class="titulo">Hola @Usuario</h3>
                <h2 class="titulo">Últimas compras</h2>
                <div class="contenedor-a">
                    <div class="producto d-flex flex-wrap">
                        <div class="foto">
                            <a href="#">
                                <img src="{{ asset('img/perfil/zapa2.png') }}" width="100" alt="Zapatilla2">
                            </a>
                        </div>
                        <div class="texto">
                            <a href="">Zapatilla 1</a>
                            <p class="texto-descripcion">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus doloribus
                            </p>
                            <p class="texto-descripcion"><b>$3500</b></p>
                        </div>
                    </div>
                    <div class="producto d-flex flex-wrap">
                        <div class="foto">
                            <a href="#">
                                <img src="{{ asset('img/perfil/zapa1.png') }}" width="100" alt="Zapatilla1">
                            </a>
                        </div>
                        <div class="texto">
                            <a href="">Zapatilla 2</a>
                            <p class="texto-descripcion">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus doloribus
                            </p>
                            <p class="texto-descripcion"><b>$4500</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columna col-lg-5">
            <div class="widget estadisticas">
                <h3 class="titulo">Datos de la cuenta</h3>
                <div class="contenedor d-flex flex-wrap">
                    <div class="caja">
                        <h3>20</h3>
                        <p>Compras</p>
                    </div>
                    <div class="caja">
                        <h3>5</h3>
                        <p>Devoluciones</p>
                    </div>
                    <div class="caja">
                        <h3>$15625</h3>
                        <p>Billetera</p>
                    </div>
                </div>
            </div>
            <div class="widget productos">
                <h3 class="titulo">Últimos articulos vistos</h3>
                <div class="contenedor">
                    <div class="producto d-flex flex-wrap">
                        <div class="foto">
                            <a href="#">
                                <img src="{{ asset('img/perfil/zapa1.png') }}" width="100" alt="Zapatilla1">
                            </a>
                        </div>
                        <div class="texto">
                            <a href="">Zapatilla 1</a>
                            <p class="texto-descripcion">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus doloribus
                            </p>
                        </div>
                        <div class="botones d-flex justify-content-start flex-wrap w-100">
                            <button class="comprar"><i class="icono icon-ok"></i>Comprar</button>
                            <button class="eliminar"><i class="icono icon-cancel"></i>Eliminar</button>
                            <button class="denunciar"><i class="icono icon-flag"></i>Denunciar</button>
                        </div>
                    </div>
                    <div class="producto d-flex flex-wrap">
                        <div class="foto">
                            <a href="#">
                                <img src="{{ asset('img/perfil/zapa2.png') }}" width="100" alt="Zapatilla2">
                            </a>
                        </div>
                        <div class="texto">
                            <a href="">Zapatilla 2</a>
                            <p class="texto-descripcion">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati maxime accusamus
                            </p>
                        </div>
                        <div class="botones d-flex justify-content-start flex-wrap w-100">
                            <button class="comprar"><i class="icono icon-ok"></i>Comprar</button>
                            <button class="eliminar"><i class="icono icon-cancel"></i>Eliminar</button>
                            <button class="denunciar"><i class="icono icon-flag"></i>Denunciar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>

@endsection