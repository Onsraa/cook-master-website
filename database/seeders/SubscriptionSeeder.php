<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('subscriptions')->insert([
            'id' => '2',
            'name' => 'Standard plan',
            'price' => '14.99',
            'currency' => 'eur',
            'product_id' => 'prod_OEClb3g0uWmiJN',
            'price_id' => 'price_1NRkLwFJvMbSMVjzo4YdaAlG',
            'nb_recipes_month' => 3,
            'nb_lessons_month' => 1,
            'nb_classes_month' => 0,
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('subscriptions')->insert([
            'id' => '3',
            'name' => 'Master plan',
            'price' => '29.99',
            'currency' => 'eur',
            'product_id' => 'prod_OECjr42INYh31o',
            'price_id' => 'price_1NRkKTFJvMbSMVjzPruZ4ODw',
            'nb_recipes_month' => 8,
            'nb_lessons_month' => 3,
            'nb_classes_month' => 1,
            'created_at' => now(),
            'updated_at' => now()
       ]);
    }
}
