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
            'title' => 'Chicken with rice and veggies',
            'ingredients' => '200g chicken; 100g rice; 50g bell pepper; frozen veggies 400g (any choice)',
            'steps' => '1. Season the chicken. 2. Cook the chicken. 3. Boil water and cook rice until cooked. 4. Add everything into
            frying pan and stir for 10mins. 5. Leave to rest for 3mins.',
            'image' => 'default img.',
            'tags' => 'High protein, High carbs, Low Fat',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'recipeDetails_id' => '1'
        ]);
        DB::table('recipeDetails')->insert([
            'calories' => '450',
            'protein' => '80',
            'carbohydrates' => '75',
            'fat' => '8',
            'sugar' => '4',
            'servings' => '2',
            'prepTime' => '5',
            'cookTime' => '15'
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
            'prepTime' => '10',
            'cookTime' => '20'
        ]);
    }
}
