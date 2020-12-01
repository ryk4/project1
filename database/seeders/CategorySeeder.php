<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '1',
            'Name' => 'Meat',
            'Description' => 'Literally just meat',
            'representative_color' => 'd44f68'
        ]);

        DB::table('categories')->insert([
            'id' => '2',
            'Name' => 'Fish',
            'Description' => 'Literally just fish...',
            'representative_color' => '7d6dad'

        ]);

        DB::table('categories')->insert([
            'id' => '3',
            'Name' => 'Vegetarian',
            'Description' => 'Vegetables. Yikes',
            'representative_color' => '67d44f'
        ]);

        DB::table('categories')->insert([
            'id' => '4',
            'Name' => 'Fruits',
            'Description' => 'Not as bad as veggies.',
            'representative_color' => 'e8a765'

        ]);

        DB::table('categories')->insert([
            'id' => '5',
            'Name' => 'Dairy',
            'Description' => 'cow products'
        ]);

        DB::table('categories')->insert([
            'id' => '6',
            'Name' => 'High Protein',
            'Description' => 'Food contains high protein.'
        ]);

        DB::table('categories')->insert([
            'id' => '7',
            'Name' => 'High Carbohydrates'
        ]);

        DB::table('categories')->insert([
            'id' => '8',
            'Name' => 'Low Fat'
        ]);

        //recipes_categories
        DB::table('recipes_categories')->insert([
            'recipes_id' => '1',
            'categories_id' => '1',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '1',
            'categories_id' => '6',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '1',
            'categories_id' => '7',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '1',
            'categories_id' => '8',
        ]);

        DB::table('recipes_categories')->insert([
        'recipes_id' => '2',
        'categories_id' => '2',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '2',
            'categories_id' => '6',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '3',
            'categories_id' => '2',
        ]);

        DB::table('recipes_categories')->insert([
            'recipes_id' => '3',
            'categories_id' => '6',
        ]);

    }
}
