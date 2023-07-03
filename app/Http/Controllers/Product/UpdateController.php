<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagIds = $data['tags'];

        if ($data['is_published'] === 'on') {
            $data['is_published'] = true;
        } else {
            $data['is_published'] = false;
        }

        unset($data['tags']);

        $product->update($data);

        ProductTag::where('product_id', '=' , $product->id)->delete();
//        DB::table('users')->where('votes', '<', 100)->delete();

        foreach ($tagIds as $id) {
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $id

            ]);
        }

        return redirect()->route('product.index');
    }
}
