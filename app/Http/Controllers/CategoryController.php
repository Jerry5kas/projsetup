<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $imageName->store('images', 'public');
        }

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
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
            'is_active' => 'sometimes'
        ]);
        Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('category.index')->with('message', 'Category updated successfully.');
    }

    public function delete(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Category deleted successfully.');
    }
}
