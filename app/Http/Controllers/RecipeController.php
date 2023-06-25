<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class RecipeController extends Controller
{
    public function search(String $request)
    {

        $recipes = DB::table('recipes')
            ->select('name', 'id','cooking_time', 'cuisine_type', 'difficulty_level', 'image_url')
            ->where('name', 'LIKE', "%{$request}%")
            ->take(16)
            ->get();

        return response()->json($recipes);
    }
public function searchId(String $request){
    $recipes = DB::table('recipes')
        ->select('name','description', 'cuisine_type',  'image_url','ingredients','instructions','preparation_time','cooking_time','calories','difficulty_level')
        ->where('id', 'LIKE', "%{$request}%")
        ->take(16)
        ->get();

    return response()->json($recipes);
}

}
