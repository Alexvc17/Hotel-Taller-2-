<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class HabitacionesController extends Controller
{


    public function showHabitaciones(){

        
$habitaciones = DB::table('habitacion as hab')
->join('precio as pre', 'hab.precio_id', '=', 'pre.id')

->select('hab.Numero','hab.descripcion','hab.numCamas','hab.foto','pre.precio','pre.Tipo')
->get(); 
        
        return view('servicios.habitaciones',['habitaciones'=>$habitaciones]);

    }


 //Consulta a) punto 6   
    public function consulta2(){

        
$habitaciones = DB::table('habitacion as hab')
->join('precio as pre', 'hab.precio_id', '=', 'pre.id')
->join('cliente as cli', 'cli.foto','cli.nombres')

->select('hab.Numero','pre.precio','pre.Tipo','cli.nombres','cli.foto')
->where('pre.Tipo', '=' , 'Suite')

->get(); 
        
        return view('hotel.consultas.consulta2',['habitaciones'=>$habitaciones]);

    } 


    
}
