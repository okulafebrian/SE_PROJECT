<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::create('meal_planners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->dateTime('schedule');
            $table->string('date');
            $table->string('time');
            $table->boolean('status');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('meal_planners');
    }
};
