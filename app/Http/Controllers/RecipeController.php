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

    public function memberIndex()
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
            'author' => 'required|string',
            'estimatedTime' => 'required|integer',
            'difficulty' => 'required|string',
            'estimatedCost' => 'required|integer',
            'description' => 'required|string',
            'ingredients' =>'required|string',
            'directions' => 'required|string',
            'image' => 'required|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $file_name = $request->title.'.'.$extension;
            $path = $request->file('image')->storeAs('public/images/foto', $file_name);
        }

         Recipe::create([
            'title'=> $request->title,
            'author'=> $request->author,
            'estimated_time'=> $request->estimatedTime,
            'difficulty' => $request->difficulty,
            'estimated_cost'=> $request->estimatedCost,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'directions' => $request->directions,
            'image' => $file_name
        ]);

        return redirect()->route('recipes.index');

        // return $request;
    }

   
    public function show($id)
    {
        return view('recipes.show');
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
