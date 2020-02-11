<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            //$table->bigIncrements('id');
            //$table->string('name');
            //$table->string('address');
            //$table->string('email')->unique();
            //$table->timestamps();

            $table->bigIncrements('id');
            $table->string('fname'); 
            $table->string('lname'); 
            $table->string('gender');
            $table->date('DOB');
            $table->string('Age');
            $table->string('Semester');
            $table->string('Registration_No');
            $table->string('PIN');
            $table->string('Course_Period');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('nationality');
            //$table->integer('user_id');
            $table->string('image')->nullable();
            //$table->softDeletes();     
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
        Schema::dropIfExists('students');
    }
}
