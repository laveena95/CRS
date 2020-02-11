<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname'); 
            $table->string('lname'); 
            $table->string('gender');
            $table->string('position'); 
            $table->string('qualification'); 
            $table->string('subject');
            $table->date ('appointment'); 
            $table->string('mobile'); 
            $table->string('email')->unique();
            $table->string('password'); 
            $table->string('image')->nullable();
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
        Schema::dropIfExists('coordinators');
    }
}
