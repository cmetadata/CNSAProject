<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('schools');
        Schema::enableForeignKeyConstraints();
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('schoolId');
            $table->string('schoolName');
            $table->integer('schoolRanking');
            $table->integer('schoolPopulation');
            // fk
            $table->integer('organizationId')->unsigned();
            $table->timestamps();  
            $table->softDeletes();         
        });

        Schema::table('schools', function($table) {
            //Setting up the relationships
            $table->foreign('organizationId')->references('organizationId')->on('organizations')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
