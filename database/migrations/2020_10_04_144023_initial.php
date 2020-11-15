<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipeDetails', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('calories')->default(null);
            $table->integer('protein')->default(null);;
            $table->integer('carbohydrates')->default(null);;
            $table->integer('fat')->default(null);;
            $table->integer('sodium')->nullable();
            $table->integer('fiber')->nullable();
            $table->integer('sugar')->nullable();
            $table->integer('servings')->nullable();
            $table->integer('cookTime')->nullable();

        });

        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('title');
            $table->string('ingredients');
            $table->text('steps');
            $table->string('image')->nullable(); //nullable means that it can be null
            $table->string('tags')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();


            $table->unsignedBigInteger('recipeDetails_id')->nullable();


            //FK
            $table->index('recipeDetails_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
        Schema::dropIfExists('recipeDetails');

    }
}
