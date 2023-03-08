<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = [
            'tenis',
            'moleton',
            'calça',
            'meia',

         ];

         foreach ($categorys as $category) {
            Category::create(['name' => $category, 'products_id' => rand(1,4)]);
         }
    }
}
