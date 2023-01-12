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
            $table->string('student_avater')->nullable(true);
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('phone_number')->nullable(true);
            $table->string('blood_group')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('street_address')->nullable(true);
            $table->string('city_name')->nullable(true);
            $table->unsignedBigInteger('country_id')->nullable(true);
            $table->integer('pin_code')->nullable(true);
            $table->date('joining_date')->nullable(true);
            $table->unsignedBigInteger('class_id');
            $table->integer('roll_number')->nullable(true);
            $table->string('status')->default('active')->comment('active,inactive');
            $table->string('created_by');
            $table->string('updated_by')->nullable(true);
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
