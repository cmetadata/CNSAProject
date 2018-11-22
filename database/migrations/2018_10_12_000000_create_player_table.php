<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('players');
        Schema::enableForeignKeyConstraints();
        Schema::create('players', function (Blueprint $table) {
            $table->increments('playerId');
            $table->string('firstName', 40);
            $table->string('lastName', 40);
            $table->integer('yearEntered');
            $table->string('position', 25);
            $table->integer('teamId');
            $table->integer('redCards')->default(0); 
            $table->integer('yellowCards')->default(0); 
            $table->integer('goals')->default(0);
            $table->integer('playerRating')->default(0);
            $table->integer('assists')->default(0);
            $table->integer('saves')->default(0); 
            $table->timestamps();

            //Setting up the relationships for the database
            //$table->foreign('teamId')->references('teamId')->on('teams');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
