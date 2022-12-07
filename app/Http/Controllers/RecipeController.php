<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rating;
use App\Models\Recipe;
use App\Models\SavedRecipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    
    public function __construct()
    {   
        $this->middleware(['auth'])->except('index');
        $this->middleware(['member'])->except('index','show');
    }

    public function index()
    {   

        $recommends = null;
        
        if (!Auth::guest()) {
            $recommends = DB::table('recipes')
                ->where('recipes.cat_1', auth()->user()->preference_1)
                ->orWhere('recipes.cat_2', auth()->user()->preference_2)
                ->orWhere('recipes.cat_3', auth()->user()->preference_3)
                ->get();
        }

        return view('recipes.index', [
            'recipes' =>  Recipe::all(),
            'recommends' => $recommends
        ]);
    }

    public function recommend() {
        
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

        // cat_1: simple | cat_2: budget | cat_3: healthy
        
        Recipe::create([
            'title'=> $request->title,
            'user_id'=> $request->user()->id,
            'author' => $request->user()->name,
            'difficulty' => $request->difficulty,
            'cat_1' => is_null($request->cat_1) ? 0 : $request->cat_1,
            'cat_2' => is_null($request->cat_2) ? 0 : $request->cat_2,
            'cat_3' => is_null($request->cat_3) ? 0 : $request->cat_3,
            'estimated_time'=> $request->estimatedTime,
            'estimated_cost'=> $request->estimatedCost,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'directions' => $request->directions,
            'picture' => $file_name,
        ]);

        return redirect()->route('my-recipes.index');

        // return $request;
    }

   
    public function show(Recipe $recipe)
    {   
        $like = Rating::where('recipe_id', $recipe->id)->first() ? 1: 0;
        $saved = SavedRecipe::where('recipe_id', $recipe->id)->first() ? 1: 0;

        if($like) {
            $like = DB::table('recipes')
                ->join('ratings', 'recipes.id', 'ratings.recipe_id')
                ->select(DB::raw('count(*) as likes_count'))
                ->where('recipe_id', $recipe->id)
                ->groupBy('recipes.id')
                ->get();
            
            $like = $like[0]->likes_count;
        }

        $liked = Rating::where([['recipe_id', $recipe->id], ['user_id', auth()->user()->id]])->exists();

        return view('recipes.show', [
            'recipe' => $recipe,
            'like' => $like,
            'liked' => $liked,
            'saved' => $saved
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
            'picture' => 'nullable|image|max:1999|mimes:jpg,png,jpeg'
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

    
    public function destroy(Recipe $recipe)
    {   
        $recipe->delete();

        return redirect()->route('my-recipes.index');
    }
}
