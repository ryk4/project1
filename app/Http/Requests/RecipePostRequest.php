<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //validate request first
            'title' => 'required|min:5',   
            'cookTime' => 'required|integer',       
            'calories' => 'required|integer',
            'servings' => 'required|integer',
            'carbohydrates' => 'required|integer',
            'protein' => 'required|integer',
            'fat' => 'required|integer',
            'ingredients' => 'required',
            'image' => 'image|dimensions:max_width=1920,max_height=1080',

        ];
    }
}
