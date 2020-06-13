<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('password');
            $table->integer('type')->default('3');
            $table->string('img')->default('default.jpg');
            $table->string('email')->unique();
            $table->string('parentEmail')->nullable();
            $table->string('phonenum')->unique();
            $table->string('parentnum')->nullable();
            $table->string('Gender')->nullable();
            $table->string('selected')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
