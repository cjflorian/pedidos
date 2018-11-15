<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detallespedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id',50);
            $table->integer('pedido_id');//pedido no
            $table->string('codigo_barras',50)->nullable();
            $table->string('nombre',50)->nullable();
            $table->string('talla',30)->nullable();
            $table->string('color',30)->nullable();
            $table->integer('cantidad');
            $table->float('precio_costo', 8, 2)->nullable();//precio de ingreso
            $table->float('precio_venta', 8, 2)->nullable();
            $table->string('user_create');
            $table->string('tipo_pago');
            $table->timestamps();
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
        //Schema::dropIfExists('detallespedidos');
    }
}
