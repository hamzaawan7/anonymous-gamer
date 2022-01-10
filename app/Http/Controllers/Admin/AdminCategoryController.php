<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function create()
    {
        return view('admin-category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg',
            'name' => 'required'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $category = Category::create([
            'image' => $newImageName,
            'name' => $request->input('name')
        ]);
        return view('admin-category');

    }

}
