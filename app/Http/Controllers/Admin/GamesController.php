<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg',
            'name' => 'required'
        ]);



        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload/category'), $newImageName);

        $categories = Category::create([
            'image' => $newImageName,
            'name' => $request->input('name')
        ]);

        $request->session()->flash('alert-success', 'User was successful added!');

        return view('admin.categories.create', ['categories' => $categories]);

    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request)
    {
        $request->get('old_image');

        $validator = Validator::make($request->all(),[
            'image' => 'required|mimes:jpg,png,jpeg',
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $category = Category::find($request->get('id'));

        if(File::exists(public_path('images/upload/category/' . $category->image ))){
            File::delete(public_path('images/upload/category/'.$category->image ));
        }
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload/category'), $newImageName);



        $category->image = $newImageName;
        $category->name = $request->get('name');


        $category->save();

        return redirect()->route('admin-categories-index');
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('admin.categories.show', ['category' => $category]);
    }

    public function delete($id)
    {
        Category::where('id', $id)->firstorfail()->delete();

        return redirect('/admin/category');
    }
}
