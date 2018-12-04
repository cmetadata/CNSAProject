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
            Schema::dropIfExists('recruiting_incident');
            Schema::enableForeignKeyConstraints();
            Schema::create('recruiting_incident', function (Blueprint $table) {
                $table->increments('incidentId');
                $table->string('incidentDescription');
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
            Schema::dropIfExists('recruiting_incident');
        }
    }