<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('team_managers');

        Schema::create('team_managers', function (Blueprint $table) {
            $table->increments('managerId');
            $table->integer('teamId');
            $table->string('firstName', 40);
            $table->string('lastName', 40);
            $table->timestamps();

            //Setting up the relationships
            //$table->foreign('teamId')->references('teamId')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_managers');
    }
}
