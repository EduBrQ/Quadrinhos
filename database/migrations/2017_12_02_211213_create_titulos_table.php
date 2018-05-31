<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('editora');
            $table->string('valor');
            $table->string('data_lancamento');
            $table->string('autor');
            $table->mediumText('review');
            $table->integer('nota')->default(7);
            $table->string('conservacao')->default('Bom estado e sem defeitos');
            $table->string('apego')->default('Normal');
            $table->integer('id_colecao');
            $table->integer('id_user');


            $table->timestamps();

            $table->index('id_colecao');
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
        Schema::dropIfExists('titulos');
    }
}
