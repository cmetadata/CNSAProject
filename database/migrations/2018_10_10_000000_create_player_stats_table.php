<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlayerStats extends Migration
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
            $table->increments('playerStatsId');
            $table->integer('redCard');
            $table->integer('yellowCard');
            $table->integer('goals');
            $table->integer('saves');
            $table->integer('assists');
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
