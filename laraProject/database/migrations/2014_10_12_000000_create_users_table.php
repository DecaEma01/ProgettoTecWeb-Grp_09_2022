<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id_utente');//->primary();
            $table->integer('livello');
            $table->text('sesso')->nullable();
            $table->integer('eta')->nullable();
            $table->text('email')->nullable();
            $table->text('user',20);
            $table->text('password');
            $table->text('nome')->nullable();
            $table->text('cognome')->nullable();
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
        Schema::dropIfExists('users');
    }
}
