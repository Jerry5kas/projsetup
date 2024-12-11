<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('product.index')->with('products', $products);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes'
        ]);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/product/';
            $file->move($path, $fileName);
        }
        Product::create([
            'name' => $request->name,
            'body' => $request->body,
            'price' => $request->price,
            'brand' => $request->brand,
            'category' => $request->category,
            'image' => $path . $fileName,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('product.index')->with('message', 'Product Created Successfully');
    }

    public function edit(int $id)
    {
        $product = Product::findOrfail($id);
        return view('product.edit')->with('product', $product);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes'
        ]);

        $product = Product::findOrFail($id);
        $path = $product->image; // Default to existing image path
        $fileName = null; // Initialize as null

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/category/';
            $file->move($path, $fileName);

            if (File::exists($product->image)) {
                File::delete($product->image);
            }

            // Update the path to include the new filename
            $path .= $fileName;
        }

        $product->update([
            'name' => $request->name,
            'body' => $request->body,
            'price' => $request->price,
            'brand' => $request->brand,
            'category' => $request->category,
            'image' => $fileName ? $path : $product->image, // Use new image path or keep old one
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect()->route('product.index')->with('message', 'Product updated successfully.');
    }

    public function delete(int $id)
    {
        $product = Product::findOrFail($id);


        $product->delete();
        return redirect()->route('product.index')->with('message', 'Product deleted successfully.');
    }
}
