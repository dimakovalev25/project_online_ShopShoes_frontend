<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'article' => $this->article,
            'description' => $this->description,
            'brand' => $this->brand,
            'preview_image' => $this->preview_image,
            'price' => $this->price,
            'count' => $this->count,
            'is_published' => $this->is_published,
//            'category_id' => $this->category->title,
            'category' => new CategoryResource($this->category),
        ];
    }
}
