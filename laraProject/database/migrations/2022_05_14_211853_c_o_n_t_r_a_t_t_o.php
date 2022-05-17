<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CONTRATTO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratto', function (Blueprint $table) {
            $table->bigIncrements('id_contratto');//->primary();
            $table->date('data');
            $table->unsignedBigInteger('id_locatario');
            $table->unsignedBigInteger('id_locatore');
            $table->unsignedBigInteger('id_opz');
            $table->unsignedBigInteger('id_casa');

            
            $table->foreign('id_locatore')->references('id_utente')->on('utente');
            $table->foreign('id_locatario')->references('id_utente')->on('utente');
            $table->foreign('id_opz')->references('id_opz')->on('opzionamento');
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
        Schema::dropIfExists('contratto');  
    }
}
