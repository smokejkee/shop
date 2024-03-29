<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'content' => 'nullable|string',
            'preview_image' => '',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'is_published' => '',
            'category_id' => '',
            'tags' => 'array',
            'colors' => 'array',
        ];
    }
}
