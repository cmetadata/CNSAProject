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
<<<<<<< HEAD:database/migrations/2018_11_12_185806_create_stadiums_table.php
            $table->integer('attendance');
            $table->integer('schoolId');
=======
            $table->integer('stadiumCapacity');
            // fk
            $table->integer('organizationId')->unsigned();
            // fk -- might need teamId?
            // $table->integer('teamId')->unsigned();
>>>>>>> 237ffac479296b3f0bb3a7c6b3b70dbf24963dc6:database/migrations/2018_10_12_000004_create_stadiums_table.php
            $table->timestamps();

            $table->foreign('schoolId')->references('schoolId')->on('schools');
        });

        Schema::table('stadiums', function($table) {
            //Setting up the relationships
            $table->foreign('organizationId')->references('organizationId')->on('organizations')->onDelete('cascade');                        
            //$table->foreign('teamId')->references('teamId')->on('teams');            
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
