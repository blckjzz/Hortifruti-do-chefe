<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id_pedido');
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->string('ncm');
            $table->double('qtd_unidade');
            $table->double('qtd_kg');
            $table->double('qtd_caixa');
            $table->double('qtd_bandeja');
            $table->double('qtd_duzia');
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
        Schema::drop();
    }
}
