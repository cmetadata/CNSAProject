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
            // fk
            $table->integer('teamId');
            $table->integer('teamScore');
            $table->integer('attendance');
            // fk
            $table->integer('gameId');
            // fk
            $table->integer('stadiumId');
            $table->timestamps();

            //Creates the relationships for the database
            // $table->foreign('teamId')->references('teamId')->on('teams');

            // $table->foreign('gameId')->references('gameId')->on('games');

            // $table->foreign('stadiumId')->references('stadiumId')->on('stadiums');
        });

        Schema::table('game_stats', function($table) {
            //Setting up the relationships
            $table->foreign('teamId')->references('teamId')->on('teams');

            $table->foreign('gameId')->references('gameId')->on('games');

            $table->foreign('stadiumId')->references('stadiumId')->on('stadiums');
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
