<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(string $id)
    {
        $category = Size::findOrFail($id);
        $category->delete();
        return redirect()->route('size.index');



    }
}
