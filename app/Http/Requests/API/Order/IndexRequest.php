<?php

namespace App\Http\Requests\API\Order;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return  [
            'name' => '',
            'address' => '',
            'email' => '',
            'products' => '',
            'total_price' => ''
        ];
    }
}
