<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'article' => 'nullable',
            'preview_image' => 'nullable',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'category_id' => 'required',
            'tags' => 'required|array',
            'brand' => 'required',
            'is_published' => 'nullable',

        ];
    }
}
