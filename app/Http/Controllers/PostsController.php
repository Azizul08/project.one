<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);
        if($post == null) return redirect(action('PostsController@index'));
        return view('posts.single', compact('post'));
    }
}
