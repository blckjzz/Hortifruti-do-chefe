<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltUserTableAddNvAcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->renameColumn('is_admin', 'nivel_acesso');
        });
        Schema::table('users', function($table)
        {
            $table->integer('nivel_acesso')->change();
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->renameColumn('nivel_acesso', 'is_admin');
            $table->boolean('is_admin')->change();
        });
    }
}
