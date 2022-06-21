<?php

use App\Http\Controllers\MemberRecipeController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/dashboard', 'dashboard');
// Route::view('/test', 'test');

Route::resource('recipes', RecipeController::class);
Route::controller(RecipeController::class)->prefix('recipes')->middleware('auth')->name('recipes.')->group(function () {
    // Route::get('trash', 'trash')->name('trash')->middleware('isAdmin');
    // Route::get('restore/{id}', 'restore')->name('restore');
    // Route::get('delete/{id}', 'delete')->name('delete');
    Route::post('create', 'create')->name('create')->middleware('auth');
});





Route::resource('my-recipes', MemberRecipeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
