<?php

namespace Database\Seeders;

use App\Models\ProductLabel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 16 ; $i++) { 
            ProductLabel::create([
                "user_id" => $i,
                "label_title" => "p-Label-".$i,
                "optional" => "none",
                "publication_status" => "1",
            ]);
        }
        
    }
}
