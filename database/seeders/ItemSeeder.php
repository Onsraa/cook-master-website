<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items_for_sell')->insert([
            [
                'title' => 'Food Item 1',
                'description' => 'Description for Food Item 1',
                'category' => 'Food',
                'price' => 9.99,
                'discount_percent' => 10,
                'stock' => 100,
                'image_url' => '/uploads/lessons/zitdeokinh.jpg',
            ],
            [
                'title' => 'Kitchen Item 1',
                'description' => 'Description for Kitchen Item 1',
                'category' => 'Kitchen',
                'price' => 14.99,
                'discount_percent' => 20,
                'stock' => 50,
                'image_url' => '/uploads/lessons/zithungdu.jpg',
            ],
            [
                'title' => 'Food Item 2',
                'description' => 'Description for Food Item 2',
                'category' => 'Food',
                'price' => 19.99,
                'discount_percent' => 0,
                'stock' => 75,
                'image_url' => '/uploads/lessons/zitsuy.jpg',
            ],
            [
                'title' => 'Kitchen Item 2',
                'description' => 'Description for Kitchen Item 2',
                'category' => 'Kitchen',
                'price' => 24.99,
                'discount_percent' => 15,
                'stock' => 60,
                'image_url' => '/uploads/lessons/zitbantron.jpg',
            ],
            [
                'title' => 'Food Item 3',
                'description' => 'Description for Food Item 3',
                'category' => 'Food',
                'price' => 29.99,
                'discount_percent' => 5,
                'stock' => 80,
                'image_url' => '/uploads/lessons/zitmapdit.jpg',
            ],
            [
                'title' => 'Kitchen Item 3',
                'description' => 'Description for Kitchen Item 3',
                'category' => 'Kitchen',
                'price' => 34.99,
                'discount_percent' => 25,
                'stock' => 40,
                'image_url' => '/uploads/lessons/zitngu.jpg',
            ],
            [
                'title' => 'Food Item 4',
                'description' => 'Description for Food Item 4',
                'category' => 'Food',
                'price' => 39.99,
                'discount_percent' => 10,
                'stock' => 90,
                'image_url' => '/uploads/lessons/zitsatthu.jpg',
            ],
            [
                'title' => 'Kitchen Item 4',
                'description' => 'Description for Kitchen Item 4',
                'category' => 'Kitchen',
                'price' => 44.99,
                'discount_percent' => 0,
                'stock' => 120,
                'image_url' => '/uploads/lessons/zittrithuc.jpg',
            ],
            [
                'title' => 'Food Item 5',
                'description' => 'Description for Food Item 5',
                'category' => 'Food',
                'price' => 49.99,
                'discount_percent' => 15,
                'stock' => 70,
                'image_url' => '/uploads/recipes/zitdeokinh.jpg',
            ],
            [
                'title' => 'Kitchen Item 5',
                'description' => 'Description for Kitchen Item 5',
                'category' => 'Kitchen',
                'price' => 54.99,
                'discount_percent' => 5,
                'stock' => 110,
                'image_url' => '/uploads/recipes/zithungdu.jpg',
            ],
        ]);

    }
}
