<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColecaoRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colecoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('n_edicao');
            $table->string('nome');
            $table->string('editora');
            $table->integer('id_user');

            $table->timestamps();

            $table->index('id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colecao_revistas');
    }
}
