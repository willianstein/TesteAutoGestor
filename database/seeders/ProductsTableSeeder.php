<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            'tênis',
            'Moleton',
            'Calça',
            'Camisa',
        ];

        $descriptions = [
            'tênis esporte',
            'Moleton azul para o frio',
            'Calça ',
            'Camisa',
        ];

        foreach (array_combine($products, $descriptions) as $product => $description) {

            Product::create(['name' => $product, 'detail' => $description, 'price' => rand(100,445)]);
        }
    }
}
