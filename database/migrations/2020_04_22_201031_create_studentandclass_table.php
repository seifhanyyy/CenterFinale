<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentandclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentandclasses', function (Blueprint $table) {
            $table->unsignedBigInteger('studentId');
            $table->unsignedBigInteger('classId');
            $table->primary(['studentId', 'classId']);
            $table->foreign('studentId')->references('id')->on('users')->onDelete('cascade')->constrained();
            $table->foreign('classId')->references('id')->on('classes')->onDelete('cascade')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentandclasses');
    }
}
