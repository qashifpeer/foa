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

            $table->string('10th_rollNumber');
            $table->string('10th_board');
            $table->string('10th_session');
            $table->integer('10th_marksObtained');
            $table->integer('10th_maxMarks');
            $table->float('10th_percentage');
            $table->string('12th_rollNumber');
            $table->string('12th_board');
            $table->string('12th_session');
            $table->integer('12th_marksObtained');
            $table->integer('12th_maxMarks');
            $table->float('12th_percentage');
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
