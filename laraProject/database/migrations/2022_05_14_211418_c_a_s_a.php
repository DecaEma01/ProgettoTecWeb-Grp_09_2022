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
            $table->text('regione');
            $table->text('via');
            $table->text('citta');
            $table->unsignedBigInteger('data_inizio');
            $table->unsignedBigInteger('data_fine');
            $table->boolean('assegnata');
            $table->boolean('tipo');
            $table->float('prezzo');
            $table->integer('mq');
            $table->boolean('wifi');
            $table->boolean('tv');
            $table->boolean('terrazza');
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


            $table->foreign('id_locatore')->references('id_utente')->on('utente')->onDelete('cascade')->onUpdate('cascade');
         
            
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
