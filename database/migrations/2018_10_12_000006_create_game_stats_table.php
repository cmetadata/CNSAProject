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
            $table->integer('teamScore');
            // fk
            $table->integer('teamId')->unsigned();
            // fk
            $table->integer('gameId')->unsigned();
            $table->timestamps();
            $table->softDeletes();  
        });

        Schema::table('game_stats', function($table) {
            //Setting up the relationships
            $table->foreign('teamId')->references('teamId')->on('teams')->onDelete('cascade');

            $table->foreign('gameId')->references('statId')->on('games')->onDelete('cascade');
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
