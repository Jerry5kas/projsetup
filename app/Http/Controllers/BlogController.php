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

    public function showEditBlog(Post $post)
    {
        if (auth()->user()->id !== $post['user_id'])
        {
            return redirect('/blog');
        }
        return view('page.blog-edit', ['post' => $post]);
    }

    public function updateEditBlog(Post $post, Request $request)
    {
        if (auth()->user()->id !== $post['user_id'])
        {
            return redirect('/blog');
        }
        $fields = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ]);
        $fields['title'] = strip_tags($fields['title']);
        $fields['body'] = strip_tags($fields['body']);

        $post->update($fields);
        return redirect('/blog');
    }

    public function deleteBlog(Post $post)
    {
        if (auth()->user()->id === $post['user_id'])
        {
            $post->delete();
        }
            return redirect('/blog');
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


        $posts = [];
        if (auth()->check()) {
            $posts = auth()->user()->userPosts()->latest()->get();
        }
        return view('page.blog-show')->with('posts', $posts);
    }


}
