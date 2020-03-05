<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/contacto', function() {
    return view('contacto');
});

Route::get('/perfil', function() {
    return view('perfil');
});



Route::get('/admin', 'ZapasController@listadoZapas');

Route::get('/admin/nueva', function() {
     return view('admin');
});

Route::post('/admin/nueva', 'ZapasController@agregarZapa');

Route::get('/admin/{id}', 'ZapasController@buscarZapa');
Route::post('admin/cambio', 'ZapasController@cambiosZapa')->name('cambiozapa');

Route::get('admin/borrar/{id}', 'ZapasController@borrarZapa');

Route::get('/carrito', function(){
    return view('carrito');
});

Route::get('/registro', 'RegistroController@index');

Route::post('/registro', 'RegistroController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/faq', function() {
    return view('faq');
});

Route::get('/producto',function(){
  return view('producto');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
