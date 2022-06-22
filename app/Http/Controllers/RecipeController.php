<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
  
    public function index()
    {
        return view('recipes.index', [
            'recipes' => Recipe::all()
        ]);
    }


    public function create()
    {
        return view('recipes.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'estimatedTime' => 'required|integer',
            'difficulty' => 'required|string',
            'estimatedCost' => 'required|integer',
            'description' => 'required|string',
            'ingredients' =>'required|string',
            'directions' => 'required|string',
            'picture' => 'required|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('picture')) {
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = $request->title.'.'.$extension;
            $path = $request->file('picture')->storeAs('public/recipe-images', $file_name);
        }

        Recipe::create([
            'title'=> $request->title,
            'user_id'=> $request->user()->id,
            'author' => $request->user()->name,
            'estimated_time'=> $request->estimatedTime,
            'difficulty' => $request->difficulty,
            'estimated_cost'=> $request->estimatedCost,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'directions' => $request->directions,
            'picture' => $file_name
        ]);

        return redirect()->route('my-recipes.index');

        // return $request;
    }

   
    public function show(Recipe $recipe)
    {
        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }

    
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', [
            'recipe' => $recipe
        ]);
    }

  
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required|string',
            'estimatedTime' => 'required|integer',
            'difficulty' => 'required|string',
            'estimatedCost' => 'required|integer',
            'description' => 'required|string',
            'ingredients' =>'required|string',
            'directions' => 'required|string',
            'picture' => 'required|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        if($request->hasFile('picture_new')){
            $extension = $request->file('picture_new')->getClientOriginalExtension();
            $file_name = $request->name.'.'.$extension;
            $path = $request->file('picture_new')->storeAs('public/recipe-images', $file_name);
        } else {
            $file_name = request('picture_old');
        }

        $recipe->update([
            'title'=> $request->title,
            'user_id'=> $request->user()->id,
            'author' => $request->user()->name,
            'estimated_time'=> $request->estimatedTime,
            'difficulty' => $request->difficulty,
            'estimated_cost'=> $request->estimatedCost,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'directions' => $request->directions,
            'picture' => $file_name
        ]);

        return redirect()->route('my-recipes.index');
    }

    
    public function destroy($id)
    {
        //
    }
}
