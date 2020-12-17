<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('precio')->insert([

            'Tipo' => 'Suite', 
            'precio' => 28000,
            
        ]);

        DB::table('precio')->insert([

            'Tipo' => 'Doble', 
            'precio' => 31000,
            
        ]);

        DB::table('precio')->insert([

            'Tipo' => 'Triple', 
            'precio' => 38000,
            
        ]);

        DB::table('precio')->insert([

            'Tipo' => 'Quad', 
            'precio' => 45000,
            
        ]);

        DB::table('precio')->insert([

            'Tipo' => 'Queen', 
            'precio' => 65000,
            
        ]);


    }
}
