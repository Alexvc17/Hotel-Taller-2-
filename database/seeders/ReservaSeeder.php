<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('reserva')->insert([

            'Numero' => '1',
            'cliente' => '2',
            'Entrada' => '2021-1-11', 
            'Salida' => '2021-1-12',
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '2',
            'cliente' => '2',
            'Entrada' => '2021-1-15', 
            'Salida' => '2021-1-16',
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '3',
            'cliente' => '4',
            'Entrada' => '2021-7-22', 
            'Salida' => '2021-7-25',
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '2',
            'cliente' => '5',
            'Entrada' => '2021-11-13', 
            'Salida' => '2021-11-14',
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '1',
            'cliente' => '5',
            'Entrada' => '2021-11-20', 
            'Salida' => '2021-11-21',
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '4',
            'cliente' => '2',
            'Entrada' => '2021-5-1', 
            'Salida' => '2021-5-2',
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '2',
            'cliente' => '1',
            'Entrada' => '2021-11-11', 
            'Salida' => NULL,
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '3',
            'cliente' => '3',
            'Entrada' => '2021-11-11', 
            'Salida' => NULL,
            
            
        ]);

        DB::table('reserva')->insert([

            'Numero' => '4',
            'cliente' => '5',
            'Entrada' => '2021-12-30', 
            'Salida' => NULL,
            
            
        ]);
    
    }
}
