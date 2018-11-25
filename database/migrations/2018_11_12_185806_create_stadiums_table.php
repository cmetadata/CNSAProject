<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadiumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('stadiums');
        Schema::enableForeignKeyConstraints();
        Schema::create('stadiums', function (Blueprint $table) {
            $table->increments('stadiumId');
            $table->string('stadiumName', 50);
            $table->integer('attendance');
            $table->integer('schoolId');
            $table->timestamps();

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
        Schema::dropIfExists('stadiums');
    }
}
