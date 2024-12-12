<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::get();
        return view('blog.index')->with('blogs', $blog);
    }

    public function create()
    {
        $categories = Category::all();
        return view('blog.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/Blog/';
            $file->move($path, $fileName);
        }

        Blog::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => isset($fileName) ? $path . $fileName : null, // Ensure this handles null if no image is uploaded
            'user_id' => auth()->id(),
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect()->route('blog.index')->with('message', 'Blog created successfully.');
    }


    public function edit(int $id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all(); // Fetch categories

        return view('blog.edit')->with([
            'blog' => $blog,
            'categories' => $categories,
        ]);
    }
    public function update(Request $request, int $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes',
        ]);
        $blog = Blog::findOrFail($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/Blog/';
            $file->move($path, $fileName);
            if (File::exists($blog->image)) {
                File::delete($blog->image);
            }
            $blog->image = $path . $fileName;
        }
        $blog->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $blog->image,
            'user_id' => auth()->id(),
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('blog.index')->with('message', 'Blog updated successfully.');
    }

    public function destroy(int $id)
    {
        $blog = Blog::findOrFail($id);

        if (File::exists($blog->image)) {
            File::delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('blog.index')->with('message', 'Blog deleted successfully.');
    }
}

