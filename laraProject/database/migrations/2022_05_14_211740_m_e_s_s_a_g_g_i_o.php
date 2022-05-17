<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MESSAGGIO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messaggio', function (Blueprint $table) {
            $table->bigIncrements('id_messaggio');//->primary();
            $table->date('data_ora');
            $table->text('testo');
            $table->unsignedBigInteger('id_mittente');
            $table->unsignedBigInteger('id_chat');

            $table->foreign('id_mittente')->references('id_utente')->on('utente');
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
        Schema::dropIfExists('messaggio');
    }
}
