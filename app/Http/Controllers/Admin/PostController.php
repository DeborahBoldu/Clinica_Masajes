<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $r){
        $data = $r->validate([
            'title'=>'required|string|max:160',
            'image_path' => 'required|string|max:255',
            'category'=>'nullable|string|max:60',
            'excerpt'=>'nullable|string|max:200',
            'content'=>'required|string',
            'is_published'=>'nullable|boolean',
        ]);
        $data['slug'] = Str::slug($data['title']).'-'.Str::random(5);
        $data['is_published'] = $r->boolean('is_published');
        Post::create($data);
        return redirect()->route('admin.posts.index')->with('success','Post creado');
    }

    public function edit(Post $post){
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $r, Post $post){
        $data = $r->validate([
            'title'=>'required|string|max:160',
            'image_path' => 'required|string|max:255',
            'category'=>'nullable|string|max:60',
            'excerpt'=>'nullable|string|max:200',
            'content'=>'required|string',
            'is_published'=>'nullable|boolean',
        ]);
        if($post->title !== $data['title']){
            $data['slug'] = Str::slug($data['title']).'-'.Str::random(5);
        }
        $data['is_published'] = $r->boolean('is_published');
        $post->update($data);
        return back()->with('success','Post actualizado');
    }

    public function destroy(Post $post){
        $post->delete();
        return back()->with('success','Post eliminado');
    }
}
