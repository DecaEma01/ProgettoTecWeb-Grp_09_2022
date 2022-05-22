<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OPZIONAMENTO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opzionamento', function (Blueprint $table) {
            $table->bigIncrements('id_opz');//->primary();
            $table->unsignedBigInteger('data_opz');
            $table->unsignedBigInteger('id_casa');
            $table->unsignedBigInteger('id_locatario');
            $table->unsignedBigInteger('id_chat');

            $table->foreign('id_locatario')->references('id_utente')->on('utente');
            $table->foreign('id_casa')->references('id_casa')->on('casa');
            $table->foreign('id_chat')->references('id_chat')->on('chat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opzionamento');
    }
}
