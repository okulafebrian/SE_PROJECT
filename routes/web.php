<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserRecipeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/dashboard', 'dashboard');
// Route::view('/test', 'test');

Route::resource('recipes', RecipeController::class);
Route::resource('my-recipes', UserRecipeController::class);


// Authentication

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
