<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained();
            $table->string('author');
            $table->string('difficulty');
            $table->integer('cat_1');
            $table->integer('cat_2');
            $table->integer('cat_3');
            $table->integer('estimated_time');
            $table->string('estimated_cost');
            $table->text('description');
            $table->text('ingredients');
            $table->text('directions');
            $table->string('picture');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
