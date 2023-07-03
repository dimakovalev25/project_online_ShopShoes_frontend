<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\StoreRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)

    {
        $data = $request->validated();
        $brand = Brand::firstOrCreate($data);

        return redirect()->route('brand.index');
    }
}
