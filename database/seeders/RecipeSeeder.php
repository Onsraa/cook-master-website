<?php
namespace Database\Seeders;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        $recipes = [
            [
                'name' => 'Recipe 1',
                'description' => 'Description for Recipe 1',
                'ingredients' => 'Ingredient 1, Ingredient 2, Ingredient 3',
                'instructions' => 'Step 1, Step 2, Step 3',
                'preparation_time' => '30 minutes',
                'cooking_time' => '1 hour',
                'difficulty_level' => 'Easy',
                'cuisine_type' => 'Italian',
                'meal_type' => 'Dinner',
                'calories' => 500,
                'image_url' => 'uploads/recipes/zitngu.jpg',
            ],
            [
                'name' => 'Recipe 2',
                'description' => 'Description for Recipe 2',
                'ingredients' => 'Ingredient A, Ingredient B, Ingredient C',
                'instructions' => 'Step A, Step B, Step C',
                'preparation_time' => '45 minutes',
                'cooking_time' => '30 minutes',
                'difficulty_level' => 'Intermediate',
                'cuisine_type' => 'Mexican',
                'meal_type' => 'Lunch',
                'calories' => 400,
                'image_url' => 'uploads/recipes/zitmapdit.jpg',
            ],
            [
                'name' => 'Recipe 3',
                'description' => 'Description for Recipe 3',
                'ingredients' => 'Ingredient X, Ingredient Y, Ingredient Z',
                'instructions' => 'Step X, Step Y, Step Z',
                'preparation_time' => '1 hour',
                'cooking_time' => '45 minutes',
                'difficulty_level' => 'Advanced',
                'cuisine_type' => 'French',
                'meal_type' => 'Dinner',
                'calories' => 800,
                'image_url' => 'uploads/recipes/zitsatthu.jpg',
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
