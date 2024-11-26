<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()  {
        $categories = Category::get();
        return view('category.index')->with('categories', $categories);
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes'
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/category/';
            $file->move($path , $fileName);
        }

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$fileName,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('category.index')->with('message', 'Category created successfully.');
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit')->with('category', $category);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes'
        ]);
        $category = Category::findOrFail($id);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/category/';
            $file->move($path , $fileName);

            if (File::exists($category->image)) {
                File::delete($category->image);
            }
        }
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$fileName,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('category.index')->with('message', 'Category updated successfully.');
    }

    public function delete(int $id)
    {
        $category = Category::findOrFail($id);

        if (File::exists($category->image)) {
            File::delete($category->image);
        }
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Category deleted successfully.');
    }
}
