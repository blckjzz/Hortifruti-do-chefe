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
            $table->integer('fk_id_produto')->unsigned();
            $table->foreign('fk_id_produto')->references('id_produto')->on('produtos');
            $table->integer('fk_id_pedido')->unsigned();
            $table->foreign('fk_id_pedido')->references('id_pedido')->on('pedidos');
            $table->double('qtd_kg');
            $table->double('qtd_caixa');
            $table->double('qtd_bandeja');
            $table->double('qtd_duzia');
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
