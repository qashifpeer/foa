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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('guardianName')->nullable();
            $table->string('emailPrimary');
            $table->string('emailAlternate')->nullable();
            $table->string('contactPrimary');
            $table->string('contactAlternate')->nullable();
            $table->foreignId('category_ID')->references('id')->on('categories');
            $table->integer('status')->default(0);

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
        Schema::dropIfExists('personal_details');
    }
};
