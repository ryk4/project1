<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
Use DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating recipe 1
        DB::table('recipes')->insert([
            'id' => '1',
            'title' => 'Chicken, rice and veggies',
            'ingredients' => '{ "Ingredients": [ { "Ingredient": "Chicken breast", "Quantity" : "200", "Unit": "g" }, { "Ingredient": "Rice", "Quantity" : "100", "Unit": "g" }, { "Ingredient": "Bell pepper", "Quantity" : "150", "Unit": "g" }, { "Ingredient": "Ketchup", "Quantity" : "40", "Unit": "g" }, { "Ingredient": "Tomato/Cucumber", "Quantity" : "Any", "Unit": "" }, { "Ingredient": "Chicken spices", "Quantity" : "20", "Unit": "g" }, { "Ingredient": "Olive oil", "Quantity" : "10", "Unit": "ml" } ] }',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '1'
        ]);
        DB::table('recipeDetails')->insert([
            'calories' => '728',
            'protein' => '70',
            'carbohydrates' => '85.9',
            'fat' => '11.9',
            'sugar' => '0',
            'servings' => '1',
            'cookTime' => '20'
        ]);

        //creating recipe 2
        DB::table('recipes')->insert([
            'id' => '2',
            'title' => 'Beef with Pasta',
            'ingredients' => '500g Beef; 200g Pasta; Ketchup sauce;',
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '2'
        ]);
        DB::table('recipeDetails')->insert([
            'id' => '2',
            'calories' => '600',
            'protein' => '60',
            'carbohydrates' => '100',
            'fat' => '25',
            'sodium' => '5',
            'fiber' => null,
            'sugar' => '10',
            'servings' => '2',
            'cookTime' => '20'
        ]);

        //creating recipe 3
        DB::table('recipes')->insert([
            'id' => '3',
            'title' => 'Pizza',
            'ingredients' => '100 sausage; 200g pizza bread; Ketchup sauce; Mayo',
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '3'
        ]);
        DB::table('recipeDetails')->insert([
            'id' => '3',
            'calories' => '780',
            'protein' => '80',
            'carbohydrates' => '120',
            'fat' => '25',
            'sodium' => '5',
            'fiber' => null,
            'sugar' => '0',
            'servings' => '1',
            'cookTime' => '35'
        ]);
    }
}
