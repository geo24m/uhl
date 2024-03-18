<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'actualite')->first();
        $posts = Post::with('category')->paginate(10);
        // dd($posts);
        return view('blog.index', compact('page', 'posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $page = (object) ['title' => $post->title, 'excerpt' => $post->excerpt, 'image' => $post->image];
        $posts = Post::with('category')->where('category_id', $post->id)->get();
        return view('blog.show', compact('post', 'posts', 'page'));
    }
}
