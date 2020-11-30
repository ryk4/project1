<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeDetail extends Model
{
    protected $table = 'recipeDetails';
    public $timestamps = false;

    protected $fillable = [
        'calories',
        'protein',
        'fat',
        'carbohydrates'];

    /* __Construct not working!!!
     *
     *
     protected $calories;
    protected $protein;
    protected $carbohydrates;
    protected $fat;


    public function __construct($calories, $protein, $carbohydrates, $fat)
    {
        $this->calories = $calories;
        $this->protein = $protein;
        $this->carbohydrates = $carbohydrates;
        $this->fat = $fat;

    }*/

}
