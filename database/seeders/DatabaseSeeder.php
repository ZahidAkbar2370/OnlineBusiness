<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Order::factory(10)->create();
        // $this->call([
        //     BrandSeeder::class,
        //     ProductSeeder::class,
        //     ProductCategorySeeder::class,
        //     ShopProfileSeeder::class,
        //     ShopCategorySeeder::class,
        //     TemplateSeeder::class,
        //     CustomerSeeder::class,
        //     ProductLabelSeeder::class,
        //     // UserSeeder::class,
        // ]);
    }
}
