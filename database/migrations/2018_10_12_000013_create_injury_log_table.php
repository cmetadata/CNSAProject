<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInjuryLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('injury_logs');
        Schema::enableForeignKeyConstraints();
        Schema::create('injury_logs', function (Blueprint $table) {
            $table->increments('injuryLogId');
            $table->date('injuryDate');
            // fk -- games not fully implemented yet
            $table->integer('gameId')->unsigned();            
            // fk
            $table->integer('injuryId')->unsigned();
            // fk
            $table->integer('playerId')->unsigned();
            $table->timestamps();
            $table->softDeletes();  
        });

        Schema::table('injury_logs', function($table) {
            //Setting up the relationships
            $table->foreign('gameId')->references('statId')->on('games')->onDelete('cascade');
            $table->foreign('injuryId')->references('injuryId')->on('injuries')->onDelete('cascade');
            $table->foreign('playerId')->references('playerId')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('injury_logs');
    }
}
