<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = []; 

    public function recipes()
    {
        return $this->belongsTo(Recipe::class);
    }
}