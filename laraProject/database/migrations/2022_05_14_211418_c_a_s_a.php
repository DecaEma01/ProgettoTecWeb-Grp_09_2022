<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CASA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casa', function (Blueprint $table) {
            $table->bigIncrements('id_casa');//->primary();
            $table->text('regione')->nullable();
            $table->text('via')->nullable();
            $table->text('citta')->nullable();
            $table->text('titolo')->nullable();
            $table->text('descrizione')->nullable();
            $table->unsignedBigInteger('data_inizio')->nullable();
            $table->unsignedBigInteger('data_fine')->nullable();
            $table->boolean('assegnata')->nullable();
            $table->boolean('tipo')->nullable();
            $table->float('prezzo')->nullable();
            $table->integer('mq')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('tv')->nullable();
            $table->boolean('terrazza')->nullable();
            //$table->integer('piano');
            //$table->boolean('arredato');
            $table->integer('eta_min')->nullable();
            $table->integer('eta_max')->nullable();
            $table->text('sesso')->nullable();
            $table->longText('foto')->nullable();
            $table->integer('Anum_camere')->nullable();
            $table->integer('Anum_letti')->nullable();
            $table->boolean('Acucina')->nullable();
            $table->boolean('Asoggiorno')->nullable();
            $table->integer('Pletti_camera')->nullable();
            $table->integer('Pletti_app')->nullable();
            $table->integer('Pstudio')->nullable();
            $table->unsignedBigInteger('id_locatore');


            $table->foreign('id_locatore')->references('id_utente')->on('users')->onDelete('cascade')->onUpdate('cascade');
         
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casa');
    }
}
