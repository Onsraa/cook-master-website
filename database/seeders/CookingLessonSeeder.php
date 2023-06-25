<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CookingLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Add three cooking lesson courses
        DB::table('cooking_lessons')->insert([
            [
                'title' => 'Italian Cuisine Masterclass',
                'description' => 'Learn the art of authentic Italian cooking.',
                'chef' => 'Giovanni Rossi',
                'category' => 'Category 1',
                'level' => 'Beginner',
                'image_url' => 'uploads/lessons/zitdeokinh.jpg',
            ],
            [
                'title' => 'Baking Basics Workshop',
                'description' => 'Discover the secrets of baking delicious treats.',
                'chef' => 'Emily Johnson',
                'category' => 'Category 2',
                'level' => 'Intermediate',
                'image_url' => 'uploads/lessons/zithungdu.jpg',
            ],
            [
                'title' => 'Sushi Making Class',
                'description' => 'Learn to prepare and roll sushi like a pro.',
                'chef' => 'Kenji Nakamura',
                'category' => 'Category 1',
                'level' => 'Advanced',
                'image_url' => 'uploads/lessons/zitsuy.jpg',
            ],
        ]);
    }
}
