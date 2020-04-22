<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentProfile', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('fname'); 
            $table->string('lname'); 
            $table->string('gender');
            $table->date('DOB');
            $table->string('Age');
            $table->string('Semester');
            $table->string('Registration_No');
            $table->string('Course_Period');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('nationality');
            $table->string('image')->default('default.png');
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
        Schema::dropIfExists('studentProfile');
    }
}
