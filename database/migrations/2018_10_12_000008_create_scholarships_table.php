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
            $table->decimal('scholarshipAmount');
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
        Schema::dropIfExists('scholarships');
    }
}
