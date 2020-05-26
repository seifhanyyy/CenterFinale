<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("day");
            $table->string("subject");
            $table->unsignedBigInteger("teacherId");
            $table->string("starts");
            $table->string("ends");
            $table->integer('capacity');
            $table->string("year");
            $table->string("gender");
            $table->timestamps();
            $table->foreign('teacherId')->references('id')->on('users')->onDelete('cascade')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
