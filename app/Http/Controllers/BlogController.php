<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('page.blog');
    }

    public function blogCreate(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $fields['title'] = strip_tags($fields['title']);
        $fields['body'] = strip_tags($fields['body']);
        $fields['user_id'] = auth()->id();
        $blogs = Post::create($fields);
        return redirect(route('blog.show'))->with('message', 'Blog Post Saved Successfully.');
    }

    public function blogShow()
    {
        $posts = Post::all();
        return view('page.blog-show')->with('posts', $posts);
    }


}
