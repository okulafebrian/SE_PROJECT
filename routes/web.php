<?php

use App\Http\Controllers\MemberRecipeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/dashboard', 'dashboard');
// Route::view('/test', 'test');

// Recipes
Route::prefix('recipes')->name('recipes.')->group(function () {
    // Route::get('/show/{id}', [RecipeController::class, 'show'])->name('show');
});
Route::resource('recipes', RecipeController::class);


// Member Recipes
Route::prefix('my-recipes')->name('my-recipes.')->group(function () {
    // Route::get('/show/{id}', [RecipeController::class, 'show'])->name('show');
});
Route::resource('my-recipes', MemberRecipeController::class);


Route::resource('subscriptions', SubscriptionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
