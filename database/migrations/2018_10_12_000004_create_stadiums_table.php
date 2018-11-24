<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadiumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('stadiums');
        Schema::enableForeignKeyConstraints();
        Schema::create('stadiums', function (Blueprint $table) {
            $table->increments('stadiumId');
            // fk -- might need teamId?
            // $table->integer('teamId')->unsigned();
            $table->string('stadiumName', 50);
            $table->integer('stadiumCapacity');
            $table->timestamps();

        });

        // Schema::table('stadiums', function($table) {
        //     //Setting up the relationships
        //     //$table->foreign('teamId')->references('teamId')->on('teams');            
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stadiums');
    }
}
