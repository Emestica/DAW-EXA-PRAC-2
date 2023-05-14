<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
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
                'id_cliente' => 1,
                'fecha_pedido' => '2023-05-01',
                'fecha_entrega' => '2023-05-03',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 2,
                'fecha_pedido' => '2023-05-05',
                'fecha_entrega' => '2023-05-07',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 3,
                'fecha_pedido' => '2023-04-15',
                'fecha_entrega' => '2023-04-17',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 4,
                'fecha_pedido' => '2023-03-01',
                'fecha_entrega' => '2023-05-01',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 5,
                'fecha_pedido' => '2023-04-20',
                'fecha_entrega' => '2023-04-22',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 6,
                'fecha_pedido' => '2023-03-18',
                'fecha_entrega' => '2023-03-20',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 7,
                'fecha_pedido' => '2023-01-10',
                'fecha_entrega' => '2023-01-20',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 8,
                'fecha_pedido' => '2023-02-10',
                'fecha_entrega' => '2023-02-22',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 9,
                'fecha_pedido' => '2022-09-01',
                'fecha_entrega' => '2023-11-03',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 10,
                'fecha_pedido' => '2023-06-01',
                'fecha_entrega' => '2023-06-03',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 11,
                'fecha_pedido' => '2023-07-29',
                'fecha_entrega' => '2023-08-01',
                'observacion' => 'N/A'
            ],[
                'id_cliente' => 12,
                'fecha_pedido' => '2019-10-01',
                'fecha_entrega' => '2019-10-02',
                'observacion' => 'N/A'
            ]
        );

        DB::table('pedidos')->insert($datos);
    }
}
