<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return Recipe::all();
    }

    public function show($id)
    {
        $recipe = Recipe::find($id);
        return $recipe;
    }

    public function store(Request $request)
    {
        $recipe = new Recipe;
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->save();

        return $recipe;
    }

    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return $recipe;
    }
}
