<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->unsignedBigInteger('sid');
            $table->unsignedBigInteger('courseId');
            $table->integer('quizweek');
            $table->string('grade');
            $table->timestamps();
            $table->primary(['sid','courseId', 'quizweek']);
            $table->foreign('sid')->references('id')->on('users')->onDelete('cascade')->constrained();
            $table->foreign('courseId')->references('id')->on('classes')->onDelete('cascade')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
