<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = []; 
    
    public function savedRecipe()
    {
        return $this->hasOne(SavedRecipe::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function mealPlanner()
    {
        return $this->belongsTo(MealPlanner::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
