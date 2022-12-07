<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlannerDetail extends Model
{
    use HasFactory;
    protected $table = 'planner_details';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = []; 
    
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function mealPlanner()
    {
        return $this->belongsTo(MealPlanner::class);
    }

}
