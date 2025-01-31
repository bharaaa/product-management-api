<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "productCategoryId" => ["required"],
            "name" => ["required", "max:150"],
            "price" => ["required"],
            "image" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
