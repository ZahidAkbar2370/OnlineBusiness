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
        Schema::create('template_sliders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("template_id");
            $table->string("slider_image_url");
            $table->string("slider_text");
            $table->string("slider_sub_text");
            $table->string("slider_button_url");
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
        Schema::dropIfExists('template_sliders');
    }
};
