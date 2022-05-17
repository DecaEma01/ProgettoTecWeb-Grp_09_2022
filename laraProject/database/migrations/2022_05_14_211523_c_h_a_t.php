<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CHAT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->bigIncrements('id_chat');//->primary();
            $table->unsignedBigInteger('id_casa');
            $table->unsignedBigInteger('id_locatore');
            $table->unsignedBigInteger('id_locatario');

            $table->foreign('id_locatario')->references('id_utente')->on('utente');
            $table->foreign('id_locatore')->references('id_utente')->on('utente');
            $table->foreign('id_casa')->references('id_casa')->on('casa');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat');
    }
}

