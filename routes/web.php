<?php

use App\Http\Controllers\MemberRecipeController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/dashboard', 'dashboard');
// Route::view('/test', 'test');

Route::prefix('recipes')->name('recipes.')->group(function () {
    // Route::get('trash', 'trash')->name('trash')->middleware('isAdmin');
    // Route::get('restore/{id}', 'restore')->name('restore');
    // Route::get('delete/{id}', 'delete')->name('delete');
    Route::get('/show/{id}', [RecipeController::class, 'show'])->name('show');
});
Route::resource('recipes', RecipeController::class);





Route::resource('my-recipes', MemberRecipeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
