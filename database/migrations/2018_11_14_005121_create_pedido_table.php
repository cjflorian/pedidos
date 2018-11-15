<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id',30);//usuario que solicita
            $table->integer('proveedor_id');//usuario que solicita
            $table->float('total', 8, 2);
            $table->boolean('aplica_descuento')->default(true);
            $table->string('estado_entrega',30)->default('CREADO');
            $table->string('estado_pago',30)->default('PENDIENTE');
            $table->string('observaciones',100)->nullable();
            $table->string('canal',30)->nullable();
            $table->string('user_create',30);
            $table->string('tipo_pago',30);

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
        Schema::dropIfExists('pedido');
    }
}
