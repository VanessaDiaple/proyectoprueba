<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        return view('post.index');
    }
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
    }
}
