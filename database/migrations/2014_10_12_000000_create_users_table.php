<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
//            $table->string('usuario')->unique(); // cria campo usuário para realizar login
            $table->string('senha');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(false);
//            $table->integer('nivel_acesso');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
