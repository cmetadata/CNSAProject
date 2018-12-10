<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('organizations');
        Schema::enableForeignKeyConstraints();
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('organizationId');
            // fk
            $table->string('organizationName');
            $table->timestamps();
            $table->softDeletes();

        });


        // Schema::table('organizations', function($table) {
        //     //Setting up the relationships
        //     $table->foreign('teamId')->references('teamId')->on('teams')->onDelete('cascade');
        //     $table->foreign('personId')->references('personId')->on('persons')->onDelete('cascade');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
