<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('scholarships');
        Schema::enableForeignKeyConstraints();
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('scholarshipId');
            $table->string('scholarshipName', 200);
            $table->integer('playerId');
            $table->decimal('scholarshipAmount');
            $table->timestamps();

            //Creating relationships for database
            //$table->foreign('playerId')->references('playerId')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarships');
    }
}
