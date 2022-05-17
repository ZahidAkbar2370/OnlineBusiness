<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
            ProductCategory::create([
                "user_id" => rand(1,10),
                "p_category_name" => "Category ".$i,
                "optional" => ".....",
            ]);
        }
    }
}
