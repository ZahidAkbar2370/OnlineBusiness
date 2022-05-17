<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopProfile>
 */
class ShopProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(1,10),
            "template_id" => $this->faker->numberBetween(1,4),
            "shop_category_id" => $this->faker->numberBetween(1,10),
            "package_id" => $this->faker->numberBetween(1,10),
            "shop_url" => "shop-".$this->faker->word()."-".$this->faker->numberBetween(1,40),
            "shop_name" => $this->faker->name(),
            "shop_mobile_no" => $this->faker->phoneNumber(),
            "shop_address" => $this->faker->address(),
            "shop_about" => $this->faker->text(),
            "profile_image" => $this->faker->imageUrl(),
            "cover_photo" => $this->faker->imageUrl(),
        ];
    }
}
