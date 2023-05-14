<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
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
                'nombre' => 'Smartphone LG',
                'descripcion' => 'LG V60 ThinQ 5G',
                'cant_inventario' => 10,
                'precio' => 299.99
            ],[
                'nombre' => 'Smartphone Samsung',
                'descripcion' => 'Samsung J2',
                'cant_inventario' => 5,
                'precio' => 99.99
            ],[
                'nombre' => 'Laptop Lenovo',
                'descripcion' => 'Lenovo Legion 5 Pro',
                'cant_inventario' => 8,
                'precio' => 1899.99
            ],[
                'nombre' => 'Laptop Dell',
                'descripcion' => 'Dell 520 PRO I9',
                'cant_inventario' => 3,
                'precio' => 536.35
            ],[
                'nombre' => 'TV LG',
                'descripcion' => 'LG OLED G PRO',
                'cant_inventario' => 15,
                'precio' => 999.99
            ],[
                'nombre' => 'Audifono Sony',
                'descripcion' => 'Sony WH-1000XM4',
                'cant_inventario' => 25,
                'precio' => 350
            ],[
                'nombre' => 'Audifono Sony',
                'descripcion' => 'Sony WF-1000XM4',
                'cant_inventario' => 30,
                'precio' => 249.99
            ],[
                'nombre' => 'Teclado Logitech MX KEYS',
                'descripcion' => 'Logitech MX Keys Master',
                'cant_inventario' => 35,
                'precio' => 99.99
            ],[
                'nombre' => 'Teclado Logitech MX MECHANICAL',
                'descripcion' => 'Logitech MX Mechanical Master',
                'cant_inventario' => 40,
                'precio' => 150.99
            ],[
                'nombre' => 'Mouse Logitech MX',
                'descripcion' => 'Logitech MX Master 3s',
                'cant_inventario' => 50,
                'precio' => 125
            ],[
                'nombre' => 'Mouse Razer',
                'descripcion' => 'Razer Basilisk',
                'cant_inventario' => 10,
                'precio' => 75.99
            ],[
                'nombre' => 'Monitor Dell',
                'descripcion' => 'Dell G660P',
                'cant_inventario' => 10,
                'precio' => 275.99
            ]
        );

        DB::table('articulos')->insert($datos);
    }
}
