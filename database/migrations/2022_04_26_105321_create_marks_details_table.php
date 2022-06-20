<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('rollNumber_10th');
            $table->string('board_10th');
            $table->string('session_10th');
            $table->integer('marksObtained_10th');
            $table->integer('maxMarks_10th');
            $table->float('percentage_10th');
            $table->string('rollNumber_12th');
            $table->string('board_12th');
            $table->string('session_12th');
            $table->integer('marksObtained_12th');
            $table->integer('maxMarks_12th');
            $table->float('percentage_12th');
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
        Schema::dropIfExists('marks_details');
    }
};
