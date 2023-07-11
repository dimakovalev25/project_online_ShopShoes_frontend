<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Size;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {

        $categories = Category::all();
        $brands = Brand::all();
        $tags = Tag::all();
        $sizes = Size::all();

        return view('product.create', compact('categories', 'brands', 'tags', 'sizes'));
    }
}
