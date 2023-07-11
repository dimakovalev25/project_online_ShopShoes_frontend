<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
//        $prod = Product::find(2);
//        dd($prod->size);

        $products = Product::all();
        return view('product.index', compact('products'));
    }
}
