<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<11; $i++)
        DB::table('products')->insert([
            'title' => 'Product '.$i,
            'price' => rand(200, 1500),
            'in_stock' => 1,
            'description' => 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.',
        ]);
    }
}
