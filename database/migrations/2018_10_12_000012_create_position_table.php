<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('positions');
        Schema::enableForeignKeyConstraints();
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('positionId');
            $table->string('positionDescription', 7);
            $table->date('positionStartDate');
            $table->date('positionEndDate')->nullable();
            // fk
            $table->integer('teamId')->unsigned();
            // fk
            $table->integer('personId')->unsigned();
            $table->timestamps();
            $table->softDeletes();  

        });


        Schema::table('positions', function($table) {
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
        Schema::dropIfExists('positions');
    }
}
