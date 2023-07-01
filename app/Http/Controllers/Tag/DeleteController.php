<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(string $id)
    {
        $category = Tag::findOrFail($id);
        $category->delete();
        return redirect()->route('tag.index');



    }
}
