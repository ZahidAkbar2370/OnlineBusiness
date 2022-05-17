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
        // \App\Models\User::factory(10)->create();
        $this->call([
            BrandSeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
            ShopProfileSeeder::class,
            ShopCategorySeeder::class,
            TemplateSeeder::class,
            // UserSeeder::class,
        ]);
    }
}
