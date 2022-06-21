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

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

     public function categories()
    {
        return $this->hasMany(Category::class);
    }
    
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }

}
