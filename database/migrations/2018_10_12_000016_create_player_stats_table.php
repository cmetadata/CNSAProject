<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('player_stats');
        Schema::enableForeignKeyConstraints();
        Schema::create('player_stats', function (Blueprint $table) {
            $table->increments('playerStatId');
            $table->integer('goals');
            $table->integer('saves');
            $table->integer('assists');
            $table->integer('redCard');
            $table->integer('yellowCard');
            // fk
            $table->integer('gameId')->unsigned();
            // fk
            $table->integer('playerId')->unsigned();
            // fk
            $table->integer('teamId')->unsigned();
            $table->timestamps();

        });

        Schema::table('player_stats', function($table) {
            //Setting up the relationships
            $table->foreign('gameId')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('playerId')->references('playerId')->on('players')->onDelete('cascade');
            $table->foreign('teamId')->references('teamId')->on('teams')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_stats');
    }
}
