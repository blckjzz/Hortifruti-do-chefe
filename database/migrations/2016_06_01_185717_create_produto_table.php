<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->string('nome');
            $table->string('ncm');
            $table->double('valor_unidade');
            $table->double('valor_kg');
            $table->double('valor_caixa');
            $table->double('valor_bandeja');
            $table->double('valor_duzia');
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
        Schema::drop('produtos');
    }
}
