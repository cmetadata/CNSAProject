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
        Schema::dropIfExists('recruiting_incident_logs');
        Schema::enableForeignKeyConstraints();
        Schema::create('recruiting_incident_logs', function (Blueprint $table) {
            $table->increments('logId');
            $table->date('incidentDate');
            // fk
            $table->integer('incidentId')->unsigned();
            // fk
            $table->integer('schoolId')->unsigned();
            // fk
            $table->integer('playerId')->unsigned();
            $table->timestamps();
        });

        Schema::table('recruiting_incident_logs', function($table) {
            //Setting up the relationships
            $table->foreign('incidentId')->references('incidentId')->on('recruiting_incident')->onDelete('cascade');
            $table->foreign('schoolId')->references('schoolId')->on('schools')->onDelete('cascade');
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
        Schema::dropIfExists('recruiting_incident_logs');
    }
}
