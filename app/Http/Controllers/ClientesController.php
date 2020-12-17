<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showClientes(){

        $clientes = DB::table('cliente')
        ->where('genero', '=' , 'f')
        ->orderBy('nombres')
        ->get(); 
        //procedemos a enviar esa informacion a la vista
        return view('clientes.clientes',['clientes'=>$clientes]);

    }
}
