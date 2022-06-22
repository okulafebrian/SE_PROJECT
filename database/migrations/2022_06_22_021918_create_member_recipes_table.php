<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('member_recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('recipe_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('member_recipes');
    }
};
