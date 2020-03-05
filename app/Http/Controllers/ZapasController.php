<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use App\Zapatilla;
use App\Modelo;
use App\Talle;
use App\Color;


class ZapasController extends Controller
{
    public function listadoZapas() {
        $listadoZapas = Zapatilla::orderBy('id_zapa')
        ->with('modelo.marca', 'talle', 'color')
        ->where('borrado', '!=', 1)
        ->get();
        #dd($listadoZapas);
        $vac = compact('listadoZapas');
        return view('listadoZapas', $vac);
    }



    public function agregarZapa(Request $req) {

        $reglas = [
            "modelo" => "string|min:4|unique:modelos,modelo",
            "marca" => "integer|min:1",
            "stock" => "integer|min:1",
            "imagen" => "file",
            "color" => "integer|min:1",
            "talle" => "integer|min:1",
            "precio_unit" => "integer|min:3",
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "integer" => "El campo :attribute debe ser numérico",
            "float" => "El campo :attribute debe ser un número con coma flotante",
            "min" => "El campo :attribute tiene un mínimo de :min caracteres",
            "unique" => "El campo :attribute ya existe"
        ];

        $this->validate($req, $reglas, $mensajes);


        $nuevaZapa = new Zapatilla();
        $nuevoModelo = new Modelo();

        $ruta = $req->file('imagen')->store('public/imagenes');
        $nombreArchivo = basename($ruta);
        
        $nuevoModelo->modelo = $req['modelo'];
        $nuevoModelo->id_marca = $req['marca'];
        $nuevoModelo->save();

        $nuevaZapa->borrado = 0;
        $nuevaZapa->id_modelo = $nuevoModelo->id_modelo;
        $nuevaZapa->stock = $req['stock'];
        $nuevaZapa->id_color = $req['color'];
        $nuevaZapa->id_talle = $req['talle'];
        $nuevaZapa->precio_unit = $req['precio_unit'];
        $nuevaZapa->imagen = $nombreArchivo;

        $nuevaZapa->save();
        return redirect('/admin');
    }

    public function buscarZapa($id) {
        $unaZapa = Zapatilla::find($id);
        $modelos = Modelo::orderBy('modelo')->get();
        $marcas = Marca::orderBy('nombre')->get();
        $talles = Talle::orderBy('numero')->get();
        $colores = Color::orderBy('color')->get();
        $vac = compact('unaZapa', 'marcas', 'talles', 'colores', 'modelos');
        return view('detalleZapa', $vac);
    }

    public function borrarZapa($id) {
        $zapa = Zapatilla::find($id);
        $zapa->borrado = 1;
        $zapa->save();
        return redirect('/admin');
    }

    public function cambiosZapa(Request $req) {
        $unaZapa = Zapatilla::find($req->id_zapa);
        $unaZapa->id_modelo = $req['modelo'];
        $unaZapa->stock = $req['stock'];
        $unaZapa->id_color = $req['color'];
        $unaZapa->id_talle = $req['talle'];
        $unaZapa->precio_unit = $req['precio_unit'];
        $unaZapa->borrado = 0;
        $unaZapa->save();
        return redirect('/admin');

    }

}
