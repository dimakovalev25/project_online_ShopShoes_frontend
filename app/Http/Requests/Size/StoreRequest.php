<?php

namespace App\Http\Requests\Size;

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
            'size' => 'required|numeric'
        ];
    }
}
