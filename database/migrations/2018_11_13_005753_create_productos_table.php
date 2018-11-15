<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',30);
            $table->string('nombre',50);
            $table->string('talla',30)->nullable();
            $table->string('color',30)->nullable();
            $table->integer('cantidad')->nullable();
            $table->float('precio_costo', 8, 2)->nullable();//precio de ingreso
            $table->float('precio_venta', 8, 2)->nullable();
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
        Schema::dropIfExists('productos');
    }
}
