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
            $table->integer('calories')->default(0);
            $table->integer('protein')->nullable()->default(null);
            $table->integer('carbohydrates')->nullable()->default(null);;
            $table->integer('fat')->nullable()->default(null);;
            $table->integer('sodium')->nullable();
            $table->integer('fiber')->nullable();
            $table->integer('sugar')->nullable();
            $table->integer('servings')->default('1');
            $table->integer('cookTime')->nullable();


        });

        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('title');
            $table->text('ingredients');
            $table->text('steps')->nullable();
            $table->string('image')->nullable(); //nullable means that it can be null
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('viewCounter')->default(0);
            $table->integer('favouriteCounter')->default(0);


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
