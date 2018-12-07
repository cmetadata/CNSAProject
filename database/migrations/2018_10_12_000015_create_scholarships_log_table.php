<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipsLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('scholarships_log');
        Schema::enableForeignKeyConstraints();
        Schema::create('scholarships_log', function (Blueprint $table) {
            $table->increments('scholarshipLogId');
            $table->date('scholarshipDate');
            // fk
            $table->integer('scholarshipId')->unsigned();
            // fk
            $table->integer('playerId')->unsigned();            
            $table->timestamps();

        });

        Schema::table('scholarships_log', function($table) {
            //Setting up the relationships
            $table->foreign('scholarshipId')->references('scholarshipId')->on('scholarships')->onDelete('cascade');
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
        Schema::dropIfExists('scholarships_log');
    }
}
