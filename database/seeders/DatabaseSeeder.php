<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
       DB::table('recipes')->insert([
            'title' => "Easy Butter Chicken",
            'author' => "Jennifer Joyce",
            'estimated_time' => 35,
            'difficulty' => "Easy",
            'estimated_cost' => 5000,
            'description' => "test",
            'ingredients' => "test",
            'directions' => "test",
            'file_path' => "fgf",
        ]);
    }
}
