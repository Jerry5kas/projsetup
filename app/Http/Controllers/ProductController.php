<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
   public function index() {
       return view('product.index');
   }

    public function create()
    {
        return view('product.create');
   }

   public function store(Request $request){
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
            $file->move($path , $fileName);
        }
        Category::create([
            'name' => $request->name,
            'body' => $request->body,
            'price' => $request->price,
            'brand' => $request->brand,
            'category' => $request->category,
            'image' => $path.$fileName,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('product.index')->with('message', 'Product Created Successfully');
   }
}
