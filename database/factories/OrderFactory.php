<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "invoice_no" => $this->faker->numberBetween(1,10),
            "customer_id" => $this->faker->numberBetween(1,10),
            "shop_id" => $this->faker->numberBetween(1,10),
            "product_id" => $this->faker->numberBetween(1,10),
            "product_sale_price" => "12",
            "quantity" => "12",
            "product_discount_price" => "2",
            "total_price" => "10",
            "status" => "pending",
        ];
    }
}
