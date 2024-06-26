<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('slider_image')->nullable();
            $table->string('slider_content1_en',1000)->nullable();
            $table->string('slider_content2_en',1000)->nullable();
            $table->string('slider_content3_en',1000)->nullable();
            $table->string('slider_content1',1000)->nullable();
            $table->string('slider_content2',1000)->nullable();
            $table->string('slider_content3',1000)->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
