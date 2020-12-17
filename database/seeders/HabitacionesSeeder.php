<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitacion')->insert([

            'descripcion' => 'Cuenta con dos habitaciones dobles, 2 baños, salón y estancia.', 
            'numCamas' => '2', 
            'foto' => 'h1.jpg',
            'precio_id' => 1,
            
        ]);

        DB::table('habitacion')->insert([

            'descripcion' => 'Se trata de una habitación para 2 personas. Su principal característica es que tiene dos camas individuales', 

            'numCamas' => '2', 
            'foto' => 'h2.jpg',
            'precio_id' => 2,
            
        ]);

        DB::table('habitacion')->insert([

            'descripcion' => 'Estas habitaciones para tres personas cuentan normalmente con tres camas individuales.', 
            'numCamas' => '3', 
            'foto' => 'h3.jpg',
            'precio_id' => 3,
            
        ]);

        DB::table('habitacion')->insert([

            'descripcion' => 'Una sala asignada a cuatro personas. Puede tener cuatro camas.', 
            'numCamas' => '4', 
            'foto' => 'h4.jpg',
            'precio_id' => 4,
            
        ]);

        DB::table('habitacion')->insert([

            'descripcion' => 'Una habitación con una cama de matrimonio. Puede ser ocupada por dos personas', 
            'numCamas' => '2', 
            'foto' => 'h5.jpg',
            'precio_id' => 5,
            
        ]);
    }
}
