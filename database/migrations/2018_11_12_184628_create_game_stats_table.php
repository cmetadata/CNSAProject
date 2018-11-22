<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('game_stats');
        Schema::enableForeignKeyConstraints();
        Schema::create('game_stats', function (Blueprint $table) {
            $table->increments('statId');
            $table->integer('teamId');
            $table->integer('teamScore');
            $table->integer('gameId');
            $table->timestamps();

            //Creates the relationships for the database
            //$table->foreign('teamId')->references('teamId')->on('teams');

            //$table->foreign('gameId')->references('gameId')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_stats');
    }
}
