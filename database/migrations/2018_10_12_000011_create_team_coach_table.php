<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamCoachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('team_coaches');
        Schema::enableForeignKeyConstraints();
        Schema::create('team_coaches', function (Blueprint $table) {
            $table->increments('coachId');
            // fk
            $table->integer('teamId')->unsigned();
            // fk
            $table->integer('personId')->unsigned();
            $table->timestamps();

        });


        Schema::table('team_coaches', function($table) {
            //Setting up the relationships
            $table->foreign('teamId')->references('teamId')->on('teams')->onDelete('cascade');
            $table->foreign('personId')->references('personId')->on('teams')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_coaches');
    }
}
