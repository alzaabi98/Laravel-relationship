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
            $table->string('title');
            $table->string('course_id');
            $table->string('vimeo_id')->unique()->index();
            $table->timestamps();

            $table->foreign('course_id')
                ->references('vimeo_id')
                ->on('courses')->onDelete('cascade');
        });

        // Schema::table('lessons', function ($table) {
        //     //$table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('course_id')
        //         ->references('course_vimeo_id')
        //         ->on('courses')->onDelete('cascade');
        // });
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
