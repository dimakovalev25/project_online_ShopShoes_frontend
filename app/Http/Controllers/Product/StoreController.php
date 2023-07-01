<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)

    {
        $data = $request->validated();
        if ($data['is_published'] === 'on') {
            $data['is_published'] = true;
        } else {
            $data['is_published'] = false;
        }
        $product = Product::firstOrCreate($data);

        return redirect()->route('product.index');
    }
}
