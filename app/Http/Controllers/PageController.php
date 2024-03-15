<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // $posts = Post::get();
        // $post = Post::first();
        // $post = Post::find(24);

        // dd($post);

        $posts = Post::paginate();

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
