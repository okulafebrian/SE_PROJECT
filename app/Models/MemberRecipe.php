<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberRecipe extends Model
{
    use HasFactory;
    protected $table = 'member_recipes';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function recipes()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
