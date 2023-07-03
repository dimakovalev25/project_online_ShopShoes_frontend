<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {

        $categories = Category::all();
        $brands = Brand::all();
        $tags = Tag::all();

        return view('product.create', compact('categories', 'brands', 'tags'));
    }
}
