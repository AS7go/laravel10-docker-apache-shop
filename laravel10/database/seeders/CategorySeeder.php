<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Заполнение данными
        DB::table('categories')->insert([
            [
                'title' => 'Phones',
                'desc' => 'lorem phone',
                'img' => 'categories.jpg',
                'alias' => 'phones',
            ],
            [
                'title' => 'Cameras',
                'desc' => 'lorem Cameras',
                'img' => 'avds_large.jpg',
                'alias' => 'cameras',
            ],
            [
                'title' => 'Laptops',
                'desc' => 'lorem laptops',
                'img' => 'categories.jpg',
                'alias' => 'laptops',
            ],
        ]);
    }
}
