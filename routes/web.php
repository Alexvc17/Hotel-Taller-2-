<?php

use Illuminate\Support\Facades\Route;

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

//Ruta
Route::get('/', function () {
    return view('principal');
});
//Ruta hitoria
Route::get('hotel/historia', function () {
    return view('hotel/historia');
});

//Ruta mision vision
Route::get('hotel/mision-vision', function () {
    return view('hotel/vision');
});

//Ruta ubicacion
Route::get('hotel/ubicacion', function () {
    return view('hotel/ubicacion');
});

//Ruta habitaciones
Route::get('servicios/habitaciones', function () {
    return view('servicios/habitaciones');
});

//Ruta eventos
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios/eventos', array('id' => $id));
});

//Ruta reservas
Route::get('reservas', function () {
    return view('reservas/reservas');
});

//Ruta contactos
Route::get('contactenos', function () {
    return view('contacto');
});



