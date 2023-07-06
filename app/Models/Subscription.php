<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;

class Subscription extends Model
{
    use HasFactory;

    public static function create(array $validatedData)
    {

        //Create the product
        try{
            $stripeSecretKey = config('stripe.sk');
            $stripe = new \Stripe\StripeClient($stripeSecretKey);
            $product = $stripe->products->create([
                'name' => $validatedData['name'],
                'active' => true,
            ]);

            //Create a subscription price
            $response = $stripe->prices->create([
                'unit_amount' => $validatedData['price'] * 100,
                'currency' => $validatedData['currency'],
                'recurring' => [
                    'interval' => 'month',
                ],
                'product' => $product->id,
            ]);
        }catch(Exception $e){
            Log::error('Stripe api error occurred : ' . $e);
        }

        try{
            $id = DB::table('subscriptions')->insertGetId(
                [
                    'name' => $validatedData['name'],
                    'price' => $validatedData['price'],
                    'currency' => $validatedData['currency'],
                    'stripe_product_key' => $response->product,
                    'stripe_api_key' => $response->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

            foreach ($validatedData['advantages'] as $advantage){
                DB::table('subscription_items')->insert(
                    [
                        'description' => $advantage,
                        'subscription_id' => $id,
                    ]
                );
            }

        }catch(Exception $e){
            Log::error('Database error occurred : ' . $e);
        }
    }
}
