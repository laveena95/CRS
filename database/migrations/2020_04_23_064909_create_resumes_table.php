<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->unsignedBigInteger('id')->unsigned();
            $table->foreign('id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->string('name');
            $table->string('Registration_No');
            $table->string('phone');
            $table->string('company');
            $table->string('position');
            $table->string('cv');
            $table->boolean('is_approved')->default('0');
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
        Schema::dropIfExists('resumes');
    }
}
