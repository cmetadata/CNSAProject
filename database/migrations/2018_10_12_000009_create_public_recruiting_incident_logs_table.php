<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitingIncidentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('public_recruiting_incident_logs');
        Schema::enableForeignKeyConstraints();
        Schema::create('public_recruiting_incident_logs', function (Blueprint $table) {
            $table->increments('publicIncidentId');
            $table->date('incidentDate');
            $table->integer('incidentCode');
            $table->string('incidentDescription')->unsigned();
            $table->timestamps();
        });
        Schema::table('games', function($table) {
            //Setting up the relationships
            $table->foreign('incidentCode')->references('incidentCode')->on('recruiting_incident_logs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public_recruiting_incident_logs');
    }
}
