<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'preference_1',
        'preference_2',
        'preference_3',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

    public function recipe()
    {
        return $this->hasMany(Recipe::class);
    }

    public function rating()
    {
        return $this->hasOne(Rating::class);
    }

    public function mealPlanner()
    {
        return $this->hasMany(MealPlanner::class);
    }

}
