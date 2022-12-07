<?php

use App\Http\Controllers\MealPlannerController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SavedRecipeController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::view('/', ['recipes' =>  Recipe::all()]);
// Route::view('/', 'home');

Route::get('/', function () {
    return view('home', [
        'recipeFirst' => Recipe::first(),
        'recipes' => Recipe::all()->skip(1),
    ]);
});

Route::view('/dashboard', 'dashboard');
// Route::view('/test', 'test');

// Recipes
Route::resource('recipes', RecipeController::class);

// Member Recipes
Route::resource('my-recipes', SavedRecipeController::class)->middleware('auth');

Route::resource('subscriptions', SubscriptionController::class)->middleware('auth');

Route::resource('ratings', RatingController::class)->middleware('auth');

Route::resource('meal-planner', MealPlannerController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
