<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pedido', function (Blueprint $table) {
            $table->increments('id_item_pedido');
            $table->integer('fk_pedido')->unsigned();
            $table->integer('fk_produto')->unsigned();
            $table->integer('fk_unidade')->unsigned();
            $table->integer('quantidade');
            $table->foreign('fk_pedido')->references('id_pedido')->on('pedidos');
            $table->foreign('fk_produto')->references('id_produto')->on('produtos');
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
        Schema::drop('item_pedido');
    }
}
