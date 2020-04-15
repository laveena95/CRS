<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('id_user');
            $table->string('company_name');
            $table->string('title');
            $table->string('description') -> nullable();
            $table->integer('status') -> nullable();
           // $table->string('date_created');
            $table->string('experience');
            $table->integer('total_positions');
            $table->string('job_location');
            $table->string('gender');
            $table->string('industry');
            $table->string('skills');
            //$table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('jobs');
    }
}
