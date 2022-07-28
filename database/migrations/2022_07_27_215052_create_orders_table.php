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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("invoice_no");
            $table->foreignId("customer_id");
            $table->foreignId("shop_id");
            $table->foreignId("product_id");
            $table->string("product_sale_price");
            $table->string("product_discount_price");
            $table->string("total_price");
            $table->enum("status",["pending", "accepted", "delivered", "done"]);
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
        Schema::dropIfExists('orders');
    }
};
