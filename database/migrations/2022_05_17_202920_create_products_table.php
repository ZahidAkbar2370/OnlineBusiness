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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("brand_id");
            $table->foreignId("p_category_id");
            $table->foreignId("lable_id")->nullable();
            $table->string("product_barcode")->nullable();
            $table->string("product_name");
            $table->string("product_sale_price");
            $table->string("product_discount_price")->default("0");
            $table->text("product_short_description");
            $table->string("product_image_1");
            $table->string("product_image_2")->nullable();
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
        Schema::dropIfExists('products');
    }
};
