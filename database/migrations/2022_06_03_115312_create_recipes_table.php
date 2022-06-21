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
            $table->foreignId('user_id');
            $table->string('author');
            $table->string('difficulty');
            $table->integer('estimated_time');
            $table->string('estimated_cost');
            $table->text('description');
            $table->text('ingredients');
            $table->text('directions');
            $table->string('picture');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
