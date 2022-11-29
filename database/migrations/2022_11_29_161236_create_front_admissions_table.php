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
        Schema::create('front_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('top_description')->nullable(true);
            $table->string('bg_image');
            $table->string('video_link');
            $table->string('bottom_description')->nullable(true);
            $table->string('button_text');
            $table->string('button_link');
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
        Schema::dropIfExists('front_admissions');
    }
};
