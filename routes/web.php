<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserRecipeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/dashboard', 'dashboard');

Route::resource('recipes', RecipeController::class);
Route::resource('my-recipes', UserRecipeController::class);
