<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $reglas =[
            "nombre" => "required|string|min:3",
            "pass" => "required|integer|min:5",
            "email" => "required|email|unique:usuarios,email",
            "avatar" => "file"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "integer" => "El campo :attribute debe ser un número entero",
            "unique" => "El campo :attribute se encuentra repetido",
            "required" => "El campo :attribute es obligatorio"
        ];


        $this->validate($req, $reglas, $mensajes);


        $usuarioNuevo = new Usuario();

        $ruta = $req->file("avatar")->store("public");
        $nombreAvatar =  basename($ruta);

        $usuarioNuevo->saldo = 0;
        $usuarioNuevo->id_rol = 2;
        $usuarioNuevo->avatar = $nombreAvatar;
        $usuarioNuevo->nombre_completo = $req["nombre"];
        $usuarioNuevo->pass = $req["pass"];
        $usuarioNuevo->email = $req["email"];


        $usuarioNuevo->save();
        return redirect("/perfil");


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
