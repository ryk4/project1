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
            'calories' => 'required|max:255',
            'servings' => 'required|integer',
            'ingredients' => 'required',
            //'image' => 'required'
        ];
    }
}
