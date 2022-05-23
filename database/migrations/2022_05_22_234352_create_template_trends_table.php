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
        Schema::create('template_trends', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("template_id");
            $table->string("text");
            $table->string("video_url")->nullable();
            $table->string("bg_image")->nullable();
            $table->string('button_url')->nullable();
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
        Schema::dropIfExists('template_trends');
    }
};
