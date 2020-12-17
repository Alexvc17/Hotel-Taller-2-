<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->insert([

            'DNI' => '1080223', 
            'nombres' => 'Yeni Lopez',
            'genero' => 'f',
            'Domicilio' => 'Calle 10',
            'Telefono' => 55372,
            'foto' => '1.jpg',
        ]);

        DB::table('cliente')->insert([

            'DNI' => '1082553', 
            'nombres' => 'Carlos Mejia',
            'genero' => 'm',
            'Domicilio' => 'Calle 30',
            'Telefono' => 64819,
            'foto' => '2.jpg',
        ]);

        DB::table('cliente')->insert([

            'DNI' => '1084337', 
            'nombres' => 'Luisa Torres',
            'genero' => 'f',
            'Domicilio' => 'Calle 21',
            'Telefono' => 90026,
            'foto' => '3.jpg',
        ]);

        DB::table('cliente')->insert([

            'DNI' => '1085542', 
            'nombres' => 'Marcos Rodriguez',
            'genero' => 'm',
            'Domicilio' => 'Calle 27',
            'Telefono' => 55264,
            'foto' => '4.jpg',
        ]);

        DB::table('cliente')->insert([

            'DNI' => '1081465', 
            'nombres' => 'Felipe Ruiz',
            'genero' => 'm',
            'Domicilio' => 'Calle 8',
            'Telefono' => 86127,
            'foto' => '5.jpg',
        ]);




    }
}
