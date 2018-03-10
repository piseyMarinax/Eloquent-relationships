<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
       
       return view('post.index',compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        if(!$post)
        {
           return redirect('posts');
        }
        
        return view('post.Show',compact('post'));
    }

    public function create()
    {
         return view('post.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
