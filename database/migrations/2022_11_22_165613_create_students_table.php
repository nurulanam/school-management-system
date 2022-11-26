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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('student_avater');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('street_address');
            $table->string('city_name');
            $table->unsignedBigInteger('country_id');
            $table->integer('pin_code');
            $table->date('joining_date');
            $table->unsignedBigInteger('class_id');
            $table->integer('roll_number');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('class_id')->references('id')->on('classes');
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
};
