<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('factura')->insert([

            'Numero' => '1',
            'cliente' => '1',
            'formaPago' => '1',
            'Entrada' => '2020-2-12', 
            'Salida' => '2020-2-17',
            'Total' => 210000,
            
        ]);

        DB::table('factura')->insert([

            'Numero' => '2',
            'cliente' => '2',
            'formaPago' => '2',
            'Entrada' => '2020-3-1', 
            'Salida' => '2020-3-5',
            'Total' => 520000,
            
        ]);

        DB::table('factura')->insert([

            'Numero' => '3',
            'cliente' => '3',
            'formaPago' => '1',
            'Entrada' => '2020-4-9', 
            'Salida' => '2020-4-11',
            'Total' => 127000,
            
        ]);

        DB::table('factura')->insert([

            'Numero' => '4',
            'cliente' => '4',
            'formaPago' => '2',
            'Entrada' => '2020-5-1', 
            'Salida' => '2020-5-4',
            'Total' => 228000,
            
        ]);

        DB::table('factura')->insert([

            'Numero' => '5',
            'cliente' => '5',
            'formaPago' => '1',
            'Entrada' => '2020-8-27', 
            'Salida' => '2020-8-28',
            'Total' => 321000,
            
        ]);
        
    }
}
