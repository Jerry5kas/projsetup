<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
   }
}
