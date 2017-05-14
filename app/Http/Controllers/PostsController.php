<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller{

    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(){
        $this->validate(request(),[
            'title' => 'required|min:2',
            'intro' => 'required',
            'alias' => 'required',
            'body' => 'required'
        ]);
        Post::create(
            request(['title', 'intro', 'alias', 'body'])
        );
        return redirect('/');
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }

    public function update(Post $post){
        $this->validate(request(),[
            'title' => 'required|min:2',
            'intro' => 'required',
            'alias' => 'required',
            'body' => 'required'
        ]);
        $post->update(request(['title', 'intro', 'alias', 'body']));
        return redirect('/');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }
}
