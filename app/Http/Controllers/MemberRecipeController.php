<?php

namespace App\Http\Controllers;

use App\Models\MemberRecipe;
use App\Models\Recipe;
use Illuminate\Http\Request;

class MemberRecipeController extends Controller
{

    public function index()
    {   

        $exist = false;

        if (MemberRecipe::where('user_id', auth()->user()->id)->exists()) {
            $exist = true;
        }

        $recipes = Recipe::where('user_id', auth()->user()->id)->get();
        $savedRecipes = MemberRecipe::where('user_id', auth()->user()->id)->get();

        return view('member-recipes.index', [
            'recipes' => $recipes,
            'savedRecipes' => $savedRecipes,
            'exist' => $exist
        ]);
    }


    public function create(Request $request)
    {
       //
    }


    public function store(Request $request)
    {
        MemberRecipe::create([
            'user_id'=> $request->user()->id,
            'recipe_id'=> $request->id,
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
