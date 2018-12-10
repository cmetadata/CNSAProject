<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicRecruitingIncidentLogsTable extends Migration
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
            $table->string('incidentDescription');
            $table->timestamps();
            $table->softDeletes();  
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
