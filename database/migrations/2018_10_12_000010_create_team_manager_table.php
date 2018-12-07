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
        Schema::enableForeignKeyConstraints();
        Schema::create('team_managers', function (Blueprint $table) {
            $table->increments('managerId');
            $table->string('position');            
            // fk
            $table->integer('teamId')->unsigned();
            // fk
            $table->integer('personId')->unsigned();
            $table->timestamps();

        });


        Schema::table('team_managers', function($table) {
            //Setting up the relationships
            $table->foreign('teamId')->references('teamId')->on('teams')->onDelete('cascade');            
            $table->foreign('personId')->references('personId')->on('persons')->onDelete('cascade');
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
