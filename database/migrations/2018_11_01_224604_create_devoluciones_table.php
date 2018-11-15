<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('devoluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle_pedido',100);
            $table->integer('user_id');//pedido no
            $table->string('codigo',30)->nullable();
            $table->string('observaciones',100)->nullable();
            $table->integer('cantidad');
            $table->string('codigo_barras',50);
            $table->string('user_create',50);
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
        Schema::dropIfExists('detallespedidos');
    }
}
