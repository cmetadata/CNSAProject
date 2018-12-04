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
            $table->foreign('gameId')->references('gameId')->on('games')->onDelete('cascade');
            // fk
            $table->foreign('playerId')->references('playerId')->on('players')->onDelete('cascade');
            // fk
            $table->foreign('teamId')->references('teamId')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('player_stats');
    }
}
