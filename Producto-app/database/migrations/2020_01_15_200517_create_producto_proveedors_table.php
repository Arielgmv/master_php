<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_proveedors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('producto_id')->unsigned();
            $table->bigInteger('proveedor_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
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
        Schema::dropIfExists('producto_proveedors');
    }
}
