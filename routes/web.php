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
Route::resource('cliente','ClienteController');

Route::resource('Inicio', 'InicioController');

Route::resource('Registro','RegistroController');

Route::resource('QuienesSomos', 'QuienesSomosController');


Route::resource('emprendedor','EmprendedorController');
Route::resource('patrocinador','PatrocinadorController');
Route::resource('consultor', 'ConsultorController');

Route::get('/', function () {
    return view('Inicio/pagReg');
});

