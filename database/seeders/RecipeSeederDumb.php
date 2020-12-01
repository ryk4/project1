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
            'title' => 'Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '<h2>Cooking chicken and rice</h2> <p>Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area. </p> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage0"> <label class="b-list_item-title custom-control-label" for="listStage0"> <strong>Stage 1: Preparation</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage1"> <p>Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage2"> <label class="b-list_item-title custom-control-label" for="listStage2"> <strong>Stage 2: Cooking rice</strong> </label> </div> </h6> </div> <!-- Stage END--> <div class="collapse show" id="stage2"> <p>Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly. </p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage3"> <label class="b-list_item-title custom-control-label" for="listStage3"> <strong>Stage 3: Cooking chicken</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage3"> <p>Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage4"> <label class="b-list_item-title custom-control-label" for="listStage4"> <strong>Stage 4: Making Salad</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage4"> <p>Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe. </p> </div> </div>',
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
            'title' => 'Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '<h2>Cooking chicken and rice</h2> <p>Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area. </p> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage0"> <label class="b-list_item-title custom-control-label" for="listStage0"> <strong>Stage 1: Preparation</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage1"> <p>Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage2"> <label class="b-list_item-title custom-control-label" for="listStage2"> <strong>Stage 2: Cooking rice</strong> </label> </div> </h6> </div> <!-- Stage END--> <div class="collapse show" id="stage2"> <p>Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly. </p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage3"> <label class="b-list_item-title custom-control-label" for="listStage3"> <strong>Stage 3: Cooking chicken</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage3"> <p>Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage4"> <label class="b-list_item-title custom-control-label" for="listStage4"> <strong>Stage 4: Making Salad</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage4"> <p>Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe. </p> </div> </div>',
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
            'title' => 'Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '<h2>Cooking chicken and rice</h2> <p>Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area. </p> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage0"> <label class="b-list_item-title custom-control-label" for="listStage0"> <strong>Stage 1: Preparation</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage1"> <p>Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage2"> <label class="b-list_item-title custom-control-label" for="listStage2"> <strong>Stage 2: Cooking rice</strong> </label> </div> </h6> </div> <!-- Stage END--> <div class="collapse show" id="stage2"> <p>Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly. </p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage3"> <label class="b-list_item-title custom-control-label" for="listStage3"> <strong>Stage 3: Cooking chicken</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage3"> <p>Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage4"> <label class="b-list_item-title custom-control-label" for="listStage4"> <strong>Stage 4: Making Salad</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage4"> <p>Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe. </p> </div> </div>',
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
            'title' => 'Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '<h2>Cooking chicken and rice</h2> <p>Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area. </p> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage0"> <label class="b-list_item-title custom-control-label" for="listStage0"> <strong>Stage 1: Preparation</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage1"> <p>Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage2"> <label class="b-list_item-title custom-control-label" for="listStage2"> <strong>Stage 2: Cooking rice</strong> </label> </div> </h6> </div> <!-- Stage END--> <div class="collapse show" id="stage2"> <p>Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly. </p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage3"> <label class="b-list_item-title custom-control-label" for="listStage3"> <strong>Stage 3: Cooking chicken</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage3"> <p>Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage4"> <label class="b-list_item-title custom-control-label" for="listStage4"> <strong>Stage 4: Making Salad</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage4"> <p>Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe. </p> </div> </div>',
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
            'title' => 'Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '<h2>Cooking chicken and rice</h2> <p>Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area. </p> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage0"> <label class="b-list_item-title custom-control-label" for="listStage0"> <strong>Stage 1: Preparation</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage1"> <p>Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage2"> <label class="b-list_item-title custom-control-label" for="listStage2"> <strong>Stage 2: Cooking rice</strong> </label> </div> </h6> </div> <!-- Stage END--> <div class="collapse show" id="stage2"> <p>Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly. </p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage3"> <label class="b-list_item-title custom-control-label" for="listStage3"> <strong>Stage 3: Cooking chicken</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage3"> <p>Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage4"> <label class="b-list_item-title custom-control-label" for="listStage4"> <strong>Stage 4: Making Salad</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage4"> <p>Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe. </p> </div> </div>',
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
            'title' => 'Chicken, rice and veggies',
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            /*'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal!
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',*/
            'steps' => '<h2>Cooking chicken and rice</h2> <p>Chicken and rice is perhaps one of the simpliest and most popular recipe out there. It requires little to no knowledge in the culinary area. </p> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage0"> <label class="b-list_item-title custom-control-label" for="listStage0"> <strong>Stage 1: Preparation</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage1"> <p>Season chicken using favourite spices and leave to rest for 10mins. Pour water into pan until half full and heat the water until it\'s boiling.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage2"> <label class="b-list_item-title custom-control-label" for="listStage2"> <strong>Stage 2: Cooking rice</strong> </label> </div> </h6> </div> <!-- Stage END--> <div class="collapse show" id="stage2"> <p>Once the water is boiling, place the rice inside it and cook for 15min. Note: stir rice using a spoon every 5mins, so it\'s not stuck together and cooks evenly. </p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage3"> <label class="b-list_item-title custom-control-label" for="listStage3"> <strong>Stage 3: Cooking chicken</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage3"> <p>Pour some oil into the frying pan and cook both sides of the chicken for at least 5mins. Once you think the chicken is cooked, cut the middle to make sure it has been cooked properly.</p> </div> <div class="d-flex align-items-center"> <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4"> <div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" id="listStage4"> <label class="b-list_item-title custom-control-label" for="listStage4"> <strong>Stage 4: Making Salad</strong> </label> </div> </h6> </div> <div class="collapse show" id="stage4"> <p>Chop cocumber/tomato or any other salad how you like and place everything in a plate. That is it for this simple recipe. </p> </div> </div>',
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
