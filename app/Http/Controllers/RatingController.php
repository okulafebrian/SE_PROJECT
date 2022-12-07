<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['member']);
    }

    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {   
        
        Rating::create([
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


    public function destroy(Recipe $recipe)
    {   
        Rating::where([['recipe_id', $recipe->id], ['user_id', auth()->user()->id]])->delete();

        return back();
    }
}
