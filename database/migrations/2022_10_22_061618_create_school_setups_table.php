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
        Schema::create('school_setups', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('school_tagline');
            $table->string('school_phone_number');
            $table->string('school_email');
            $table->integer('school_eiin_number');
            $table->integer('school_mpo_number');
            $table->string('school_avater');
            $table->longText('school_description');
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
        Schema::dropIfExists('school_setups');
    }
};
