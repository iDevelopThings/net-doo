<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|unique:categories|max:255',
            'root' => 'bail|required',
            'parent_categories' => 'bail|required',
            'child_categories' => 'bail|required',
            'image' => 'bail|required',
            'image.*' => 'bail|required|image|mimes:jpeg,png,jpg,svg|max:1024',
        ];
    }
}
