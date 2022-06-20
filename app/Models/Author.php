<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
