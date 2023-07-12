<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;


class FilterListController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $brands = Brand::all();

        
        $tags = Tag::all();
        $maxPrice = Product::orderBy('price', 'DESC')->first()->price;
        $minPrice = Product::orderBy('price', 'ASC')->first()->price;

        $result = [
            'categories' => $categories,
            'brands' => $brands,

        ];

        return response()->json($result);

    }
}
