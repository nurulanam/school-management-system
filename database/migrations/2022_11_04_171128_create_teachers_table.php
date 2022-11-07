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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_avater');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('email');
            $table->string('blood_group');
            $table->string('qualification');
            $table->string('gender');
            $table->mediumText('street_address');
            $table->string('city_name');
            $table->unsignedBigInteger('country_id');
            $table->integer('pin_code');
            $table->date('joining_date');
            $table->date('leaving_date')->nullable(true);
            $table->unsignedBigInteger('position_id');
            $table->string('status')->default('Inactive')->comment('Active,Hold,Inactive');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('position_id')->references('id')->on('positions');
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
        Schema::dropIfExists('teachers');
    }
};
