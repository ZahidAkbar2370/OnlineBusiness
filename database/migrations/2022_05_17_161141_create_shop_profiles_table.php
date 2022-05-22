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
        Schema::create('shop_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("template_id")->default("4");
            $table->foreignId("shop_category_id");
            $table->foreignId("package_id")->nullable();
            $table->string("shop_url");
            $table->string("shop_name");
            $table->string("shop_mobile_no");
            $table->string("shop_address");
            $table->string("shop_about");
            $table->string("profile_image")->default("https://via.placeholder.com/640x480.png/0022dd?text=profile");
            $table->string("cover_photo")->default("https://via.placeholder.com/640x480.png/0022dd?text=cover");
            $table->enum("publication_status",[0,1])->default("1");
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
        Schema::dropIfExists('shop_profiles');
    }
};
