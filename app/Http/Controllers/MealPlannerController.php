<?php

namespace App\Http\Controllers;

use App\Models\MealPlanner;
use App\Models\PlannerDetail;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MealPlannerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['member']);
    }

    public function index()
    {

        return view('meal-planner.index', [
            'planners' =>  MealPlanner::all(),
            'exist' => MealPlanner::exists() ? true : false
        ]);
    }

   
    public function create()
    {
         return view('meal-planner.create', [
            'recipes' => Recipe::all()
         ]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
        ]);

        MealPlanner::create([
            'title'=> $request->title,
            'date'=> $request->date,
            'time' => $request->time,
            'status' => 1,
            'user_id' => $request->user()->id
        ]);

        $meal_planner = DB::table('meal_planners')->latest('created_at')->first();

        $selections = $request->selections;

        foreach ($selections as $selection) {
            PlannerDetail::create([
                'meal_planner_id'=> $meal_planner->id,
                'recipe_id'=> $selection,
            ]);
        }
        return redirect()->route('meal-planner.index');
    }

   
    public function show(MealPlanner $mealPlanner)
    {   

        $recipes = DB::table('meal_planners')
                ->join('planner_details', 'meal_planners.id', 'planner_details.meal_planner_id')
                ->join('recipes', 'recipes.id', 'planner_details.recipe_id')
                ->get();

        // dd($recipes);
        return view('meal-planner.show', [
            'planner' => $mealPlanner,
            'recipes' => $recipes
         ]);
    }

    
    public function edit(MealPlanner $mealPlanner)
    {
        //
    }

   
    public function update(Request $request, MealPlanner $mealPlanner)
    {
        //
    }

   
    public function destroy(MealPlanner $mealPlanner)
    {
         $mealPlanner->delete();

        return redirect()->route('meal-planner.index');
    }
}
