<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user() && Auth::user()->is_admin == true) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image_path' => 'required',
            'description' => 'required',
            'price' => 'required',
            'paypal_button' => 'required',
            'weight' => '',
            'category_id' => 'required|exists:categories,id',
            'is_vintage' => 'required|boolean',
            'is_precious' => 'required|boolean',
            'is_gemstone' => 'required|boolean',
            'is_rhinestone' => 'required|boolean',
            'is_other' => 'required|boolean',
            'is_active' => 'required|boolean'
        ];
    }
}
