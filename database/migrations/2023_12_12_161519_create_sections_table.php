<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::dropIfExists('sections');

        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('no');
            $table->text('url');
            $table->unsignedBigInteger('course_id');
            // $table->foreign('course_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sections');
    }

}
