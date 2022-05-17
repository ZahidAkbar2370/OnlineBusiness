<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
            Brand::create([
                "user_id" => rand(1,10),
                "brand_name" => "Brand ".$i,
                "optional" => ".....",
            ]);
        }
    }
}
