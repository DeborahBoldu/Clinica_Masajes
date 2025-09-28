<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::published()->latest()->paginate(6);
        return view('blog.index', compact('posts'));
    }

    public function show($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        abort_unless($post->is_published, 404);
        return view('blog.show', compact('post'));
    }
}
