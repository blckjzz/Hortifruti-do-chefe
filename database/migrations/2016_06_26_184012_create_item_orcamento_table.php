<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemOrcamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_orcamento', function (Blueprint $table) {
            $table->increments('id_item_orcamento');
            $table->integer('fk_orcamento')->unsigned();
            $table->foreign('fk_orcamento')->references('id_orcamento')->on('orcamentos');
            $table->integer('fk_produto')->unsigned();
            $table->foreign('fk_produto')->references('id_produto')->on('produtos');
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
        Schema::drop('item_orcamento');
    }
}
