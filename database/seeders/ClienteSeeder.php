<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = array(
            [
                'nombre' => 'Alexander',
                'apellido' => 'Eméstica',
                'fecha_nacimiento' => '2000-01-10'
            ],[
                'nombre' => 'Alberto',
                'apellido' => 'Ramírez',
                'fecha_nacimiento' => '2000-02-11'
            ],[
                'nombre' => 'Estefany',
                'apellido' => 'Castro',
                'fecha_nacimiento' => '1997-08-15'
            ],[
                'nombre' => 'Ana',
                'apellido' => 'Portillo',
                'fecha_nacimiento' => '1999-04-02'
            ],[
                'nombre' => 'Oscar',
                'apellido' => 'Canizales',
                'fecha_nacimiento' => '2000-02-05'
            ],[
                'nombre' => 'Gerardo',
                'apellido' => 'Monroy',
                'fecha_nacimiento' => '2000-06-15'
            ],[
                'nombre' => 'Sergio',
                'apellido' => 'Avalos',
                'fecha_nacimiento' => '1991-03-10'
            ],[
                'nombre' => 'Vladimir',
                'apellido' => 'Ruiz',
                'fecha_nacimiento' => '2005-07-07'
            ],[
                'nombre' => 'Rebeca',
                'apellido' => 'Chavez',
                'fecha_nacimiento' => '2003-10-09'
            ],[
                'nombre' => 'Alexia',
                'apellido' => 'Guiselle',
                'fecha_nacimiento' => '1999-06-18'
            ],[
                'nombre' => 'Camila',
                'apellido' => 'Orellana',
                'fecha_nacimiento' => '1998-11-14'
            ],[
                'nombre' => 'Katherine',
                'apellido' => 'Ventura',
                'fecha_nacimiento' => '2001-09-20'
            ]
        );

        DB::table('clientes')->insert($datos);
    }
}
