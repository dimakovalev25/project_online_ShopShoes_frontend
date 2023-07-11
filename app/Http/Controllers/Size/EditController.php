<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Size $size)
    {
        return view('size.edit', compact('size'));
    }
}
