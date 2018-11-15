<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacoraPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('bitacorapedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detalle_pedido');
            $table->integer('user_id');//pedido no
            $table->string('codigo')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('cantidad');
            $table->string('codigo_barras');
            $table->string('user_create');
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
        Schema::dropIfExists('bitacorapedidos');
    }
}
