<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            "mobile_no" => $this->faker->phoneNumber(),
            "address" => $this->faker->streetAddress(),
            "optional" => $this->faker->city(),
        ];
    }
}
