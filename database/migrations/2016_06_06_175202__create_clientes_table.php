<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('cnpj');
            $table->string('telefone');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('ponto_referencia');
            $table->integer('fk_tipo_estabelecimento')->unsigned();
            $table->foreign('fk_tipo_estabelecimento')->references('id_tipo_estabelecimento')->on('tipo_estabelecimento');
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
