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
            'preview_image' => 'required|string',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'category_id' => 'required|integer',
            'is_published' => 'required',

        ];
    }
}
