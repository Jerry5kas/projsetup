<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request) {
        $request->validate([
           'category_id' => 'required',
           'name' => 'required',
           'description' => 'required',
           'image' => 'required',
            'is_active' => 'sometimes',
        ]);

        return 'Blog create Successfully';
    }
}

