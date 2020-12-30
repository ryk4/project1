<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
Use DB;

class RecipeSeederDumb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating recipe 4
        DB::table('recipes')->insert([
            'id' => '4',
            'title' => '4 Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '4'
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

        //creating recipe 5
        DB::table('recipes')->insert([
            'id' => '5',
            'title' => '5 Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '5'
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

        //creating recipe 6
        DB::table('recipes')->insert([
            'id' => '6',
            'title' => '6 Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '6'
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

        //creating recipe 7
        DB::table('recipes')->insert([
            'id' => '7',
            'title' => '7 Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '7'
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

        //creating recipe 8
        DB::table('recipes')->insert([
            'id' => '8',
            'title' => '8 Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '8'
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

        //creating recipe 9
        DB::table('recipes')->insert([
            'id' => '9',
            'title' => '9 Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '{ "Title": "Cooking chicken and rice", "Description": "Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area.", "Stage": [ { "StageTitle": "Stage 1", "StageContent": "Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling." }, { "StageTitle": "Stage 2", "StageContent": "Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly." }, { "StageTitle": "Stage 3", "StageContent": "Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly." }, { "StageTitle": "Stage 4", "StageContent": "Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe." } ] }',
            'image' => 'default img.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '9'
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

        //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////////////////////////////////////

        //categories
        DB::table('recipes_categories')->insert([
            'recipes_id' => '4',
            'categories_id' => '3',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '4',
            'categories_id' => '9',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '5',
            'categories_id' => '3',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '5',
            'categories_id' => '8',
        ]);




        DB::table('recipes_categories')->insert([
            'recipes_id' => '6',
            'categories_id' => '2',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '6',
            'categories_id' => '6',
        ]);


        DB::table('recipes_categories')->insert([
            'recipes_id' => '7',
            'categories_id' => '2',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '7',
            'categories_id' => '7',
        ]);





        DB::table('recipes_categories')->insert([
            'recipes_id' => '8',
            'categories_id' => '4',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '8',
            'categories_id' => '8',
        ]);


        DB::table('recipes_categories')->insert([
            'recipes_id' => '9',
            'categories_id' => '1',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '9',
            'categories_id' => '6',
        ]);






    }
}
