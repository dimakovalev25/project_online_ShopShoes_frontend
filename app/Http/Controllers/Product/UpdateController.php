<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagIds = $data['tags'];
        $sizeIds = $data['sizes'];

        if ($data['is_published'] === 'on') {
            $data['is_published'] = true;
        } else {
            $data['is_published'] = false;
        }

        unset($data['tags']);
        unset($data['sizes']);

        $product->update($data);

        ProductTag::where('product_id', '=' , $product->id)->delete();

        foreach ($tagIds as $id) {
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $id

            ]);
        }

        ProductSize::where('product_id', '=', $product->id)->delete();
        foreach ($sizeIds as $id) {
            ProductSize::firstOrCreate([
                'product_id' => $product->id,
                'size_id' => $id

            ]);
        }


        return redirect()->route('product.index');
    }
}
