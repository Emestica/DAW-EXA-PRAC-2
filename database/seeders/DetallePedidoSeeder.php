<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePedidoSeeder extends Seeder
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
                'id_pedido' => 1,
                'id_articulo' => 1,
                'cantidad' => 2,
                'descuento' => 10.00
            ],[
                'id_pedido' => 2,
                'id_articulo' => 2,
                'cantidad' => 1,
                'descuento' => 1.00
            ],[
                'id_pedido' => 3,
                'id_articulo' => 3,
                'cantidad' => 3,
                'descuento' => 5.00
            ],[
                'id_pedido' => 4,
                'id_articulo' => 4,
                'cantidad' => 1,
                'descuento' => 0.00
            ],[
                'id_pedido' => 5,
                'id_articulo' => 5,
                'cantidad' => 1,
                'descuento' => 3.99
            ],[
                'id_pedido' => 6,
                'id_articulo' => 6,
                'cantidad' => 8,
                'descuento' => 25.00
            ],[
                'id_pedido' => 7,
                'id_articulo' => 7,
                'cantidad' => 6,
                'descuento' => 11.99
            ],[
                'id_pedido' => 8,
                'id_articulo' => 8,
                'cantidad' => 2,
                'descuento' => 0.00
            ],[
                'id_pedido' => 9,
                'id_articulo' => 9,
                'cantidad' => 1,
                'descuento' => 8.00
            ],[
                'id_pedido' => 10,
                'id_articulo' => 10,
                'cantidad' => 3,
                'descuento' => 5.00
            ],[
                'id_pedido' => 11,
                'id_articulo' => 11,
                'cantidad' => 5,
                'descuento' => 7.00
            ],[
                'id_pedido' => 12,
                'id_articulo' => 12,
                'cantidad' => 1,
                'descuento' => 1.00
            ]
        );

        DB::table('detalle_pedido')->insert($datos);
    }
}
