<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('games');
        Schema::enableForeignKeyConstraints();
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->date('gameDate');
            $table->integer('gameAttendance');
            // fk
            $table->integer('stadiumId')->unsigned();
            $table->timestamps();
        });

        Schema::table('games', function($table) {
            //Setting up the relationships
            $table->foreign('stadiumId')->references('stadiumId')->on('stadiums')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
