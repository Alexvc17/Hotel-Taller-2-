<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formapago')->insert([

            'descripcion' => 'En efectivo', 
            
            
        ]);

        DB::table('formapago')->insert([

            'descripcion' => 'Con tarjeta', 
            
            
        ]);
    }
}
