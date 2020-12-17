<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservasController;

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
Route::get('/', [HotelController::class, 'getIndex']);

//Ruta hitoria
Route::get('hotel/historia', [HotelController::class, 'showHistoria']);

//Ruta mision vision
Route::get('hotel/mision-vision', [HotelController::class, 'showMision']);

//Ruta ubicacion
Route::get('hotel/ubicacion', [HotelController::class, 'showUbicacion']);



//Ruta habitaciones
Route::get('servicios/habitaciones', [HabitacionesController::class, 'showHabitaciones']);

//Ruta eventos
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios/eventos', array('id' => $id));
});

//Ruta visualizar Clientes
Route::get('clientes/visualizar', [ClientesController::class, 'showClientes']);

//Ruta facturacion
Route::get('facturacion', [FacturacionController::class, 'getFactura']);

//Ruta reservas
Route::get('reservas', [ReservasController::class, 'getReservas']);


//Ruta contactos
Route::get('contactenos', [HotelController::class, 'showContactos']);


/*Ruta consulta1  a) Obtener el número de habitación, tipo y precio de las habitaciones que estén
ocupadas en la actualidad (no tienen fecha de salida)*/
Route::get('consulta/consulta1', [ReservasController::class, 'consulta1']);
//Ruta consulta 2 Obtener la cantidad de habitaciones por tipo que cuenta el hotel
Route::get('consulta/consulta2', [HabitacionesController::class, 'consulta2']);


