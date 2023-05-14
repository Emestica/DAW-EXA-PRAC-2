<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function(Blueprint $table){
            $table->id('id_cliente');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->date('fecha_nacimiento');
        });

        Schema::create('articulos', function(Blueprint $table){
            $table->id('id_articulo');
            $table->string('nombre', 50);
            $table->string('descripcion', 150);
            $table->integer('cant_inventario', false, true);
            $table->decimal('precio', 8, 2, true);
        });

        Schema::create('pedidos', function(Blueprint $table){
            $table->id('id_pedido');
            $table->foreignId('id_cliente')->constrained('clientes','id_cliente');
            $table->date('fecha_pedido');
            $table->date('fecha_entrega');
            $table->string('observacion', 150);
        });

        Schema::create('detalle_pedido', function(Blueprint $table){
            $table->unsignedBigInteger('id_pedido', false);
            $table->unsignedBigInteger('id_articulo', false);
            $table->integer('cantidad', false, true);
            $table->decimal('descuento', 8, 2, true);
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
            $table->foreign('id_articulo')->references('id_articulo')->on('articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
