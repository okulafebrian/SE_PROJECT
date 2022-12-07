<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlanner extends Model
{
    use HasFactory;
    protected $table = 'meal_planners';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = []; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
