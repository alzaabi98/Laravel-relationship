<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completion_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->index();
            $table->string('lesson_id')->index();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('lesson_id')
                ->references('vimeo_id')
                ->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completion_user');
    }
}
