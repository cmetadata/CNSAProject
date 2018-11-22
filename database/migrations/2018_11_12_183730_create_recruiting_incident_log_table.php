<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitingIncidentLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiting_incident_logs', function (Blueprint $table) {
            $table->increments('incidentCode');
            $table->date('incidentDate');
            $table->integer('schoolId');
            $table->string('incidentDescription')
            $table->timestamps();

            //Creates the relationships for the database
            $table->foreign('schoolId')->references('schoolId')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruiting_incident_logs');
    }
}
