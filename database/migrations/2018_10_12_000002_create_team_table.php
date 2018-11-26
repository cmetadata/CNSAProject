<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('teams');
        Schema::enableForeignKeyConstraints();
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('teamId');
            $table->string('teamName', 50);
            // fk
            $table->integer('schoolId')->unsigned();
            $table->timestamps();

        });

        Schema::table('teams', function($table) {
            //Setting up the relationships
            $table->foreign('schoolId')->references('schoolId')->on('schools')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
