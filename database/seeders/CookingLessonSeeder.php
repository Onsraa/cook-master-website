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
                'price' => '$99.99',
                'duration' => '2 hours',
                'score' => '4.5',
                'create_date' => '2023-06-01',
                'user_id' => 1,
            ],
            [
                'title' => 'Baking Basics Workshop',
                'description' => 'Discover the secrets of baking delicious treats.',
                'price' => '$49.99',
                'duration' => '1.5 hours',
                'score' => '4.2',
                'create_date' => '2023-06-02',
                'user_id' => 1,
            ],
            [
                'title' => 'Sushi Making Class',
                'description' => 'Learn to prepare and roll sushi like a pro.',
                'price' => '$79.99',
                'duration' => '2 hours',
                'score' => '4.8',
                'create_date' => '2023-06-03',
                'user_id' => 1,
            ],
        ]);
    }
}
