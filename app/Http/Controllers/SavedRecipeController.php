<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\SavedRecipe;
use Illuminate\Http\Request;

class SavedRecipeController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['member']);
    }
    
    public function index()
    {
        $exist = false;

        if (SavedRecipe::where('user_id', auth()->user()->id)->exists()) {
            $exist = true;
        }

        $recipes = Recipe::where('user_id', auth()->user()->id)->get();
        $savedRecipes = SavedRecipe::where('user_id', auth()->user()->id)->get();

        return view('saved-recipes.index', [
            'recipes' => $recipes,
            'savedRecipes' => $savedRecipes,
            'exist' => $exist
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {   
        // dd($request);

        SavedRecipe::create([
            'user_id'=> $request->user()->id,
            'recipe_id'=> $request->recipe_id,
        ]);

        return back();
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
