<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        return view('posts.index');
    }
    public function edit($id)
    {
        return view('posts.edit', compact('id'));
    }
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
    }
}
