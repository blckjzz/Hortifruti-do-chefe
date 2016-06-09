<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterItemPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->increments('id_pedido');
            $table->integer('fk_id_cliente')->unsigned();
            $table->foreign('fk_id_cliente')->references('id_cliente')->on('clientes');
            $table->integer('fk_tipo_produto')->unsigned();
            $table->foreign('fk_tipo_produto')->references('id_tipo_produto')->on('tipo_produto');
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
    }
}

