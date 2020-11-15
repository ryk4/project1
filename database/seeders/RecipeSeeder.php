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
            'ingredients' => 'Chicken breast-200g;Rice-100g;Bell pepper-150g;Ketchup-40g;Tomato/Cocumber-Any amount;Chicken spices-20g;Olive oil-10ml;',
            'steps' => '1. Season the chicken and leave to rest for 10minutes. 2. Boil the water and cook the rice. 3. While Rice is cooking, heat up the pan and cook both sides of the 
            chicken breast for 5mins (or until cooked) 4. That\'s it! Place everything into a place and enjoy your meal! 
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',
            'image' => 'default img.',
            'tags' => 'Meat;High protein;High carbs;Low Fat;',
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
            'steps' => '1. Season the beef. 2. Cook the beef. 3. Boil water and cook pasta until cooked. 4. Add everything into
            frying pan and stir for 10mins.',
            'image' => 'default img.',
            'tags' => 'High carbs',
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
            'steps' => '1. Create pica. 2. Cook it at 450.',
            'image' => 'default img.',
            'tags' => 'High carbs, High fat',
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
