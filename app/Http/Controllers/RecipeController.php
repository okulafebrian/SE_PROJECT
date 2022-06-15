<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

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
            'title'=> $request->estimatedTime,
            'author'=> $request->estimatedTime,
            'estimatedTime'=> $request->author,
            'difficulty' => $request->estimatedTime,
            'estimatedCost'=> $request->author,
            'description' => $request->estimatedTime,
            'ingredients' => $request->estimatedTime,
            'directions' => $request->estimatedTime,
            'picture' => 'required|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        if($request->hasFile('picture')){
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = $request->name.'.'.$extension;
            $path = $request->file('picture')->storeAs('public/images/recipe', $file_name);
        }

         Recipe::create([
            'name'=> $request->name,
            'author'=> $request->author,
            'estimatedTime'=> $request->estimatedTime,
            'difficulty' => $request->difficulty,
            'estimatedCost'=> $request->estimatedCost,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'directions' => $request->directions,
            'picture' => $file_name
        ]);

        return redirect()->route('recipes.index');
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
