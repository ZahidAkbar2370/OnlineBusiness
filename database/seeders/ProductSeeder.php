<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no = 0;
        for($j=0;$j<40;$j++){
            for($i=1; $i<11;$i++){
                $no++;
                $image = rand(1,40);
                Product::create([
                    "user_id" => rand(1,10),
                    "brand_id" => rand(1,10),
                    "p_category_id" => rand(1,10),
                    "lable_id" => rand(1,10),
                    "product_barcode" => "barcode".rand(1,10),
                    "product_name" => "Product".$no,
                    "product_sale_price"  => rand(30,500),
                    "product_discount_price" => rand(0,29),
                    "product_short_description" => "Test Description For Product ".$no,
                    "product_image_1" => "images/".$image.".jpg",
                    "product_image_2" => "images/".$image."a.jpg",
                ]);
            }
        }
    }
}
