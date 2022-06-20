<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = []; 

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    public function author()
    {
        return $this->hasOne(Author::class);
    }
}
