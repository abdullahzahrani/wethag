<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            //for instructor
            $table->string('instructor');
            $table->bigInteger('phone');
            $table->longText('major');
            $table->longText('linkedin');
            $table->longText('twitter');
            $table->string('instructorAll')->default('multi');


            //for subject
            $table->string('url');
            $table->longText('description');
            $table->string('collage');
            $table->string('subject');
            $table->integer('chapter');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->boolean('flag')->default(true);
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
        Schema::dropIfExists('lessons');
    }
}
