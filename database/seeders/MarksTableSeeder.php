<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $markes = [
            'Adidas',
            'Nike',
            'Reserva',

         ];

         foreach ($markes as $marke) {
              Mark::create(['name' => $marke, 'category_id' =>  rand(1,3), 'products_id' =>  rand(1,3)]);
         }
    }
}
