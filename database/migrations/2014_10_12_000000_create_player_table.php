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
        Schema::create('player', function (Blueprint $table) {
            $table->increments('playerId');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('schoolId');
            $table->integer('yearEntered');
            $table->string('position');
            $table->integer('teamId');
            $table->integer('redCards');
            $table->integer('yellowCards');
            $table->integer('goals');
            $table->integer('playerRating');
            $table->integer('assists');
            $table->integer('saves');
            $table->integer('playerId');
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
        Schema::dropIfExists('player');
    }
}
