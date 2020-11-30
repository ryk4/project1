<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    protected $table = 'recipes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'steps',
        'ingredients',
        'image',
        'tags',
        'recipeDetails_id'];


}
