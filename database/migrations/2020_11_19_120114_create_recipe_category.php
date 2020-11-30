<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name');
            $table->string('description')->default("Category not added yet.");
            $table->string('representative_color')->default("Color not added yet.");

        });

        Schema::create('recipes_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('recipes_id');
            $table->unsignedBigInteger('categories_id');

            //2 FK = Composite primary key

            //FK
            $table->index('recipes_id');
            $table->index('categories_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_categories');
        Schema::dropIfExists('categories');
    }
}
