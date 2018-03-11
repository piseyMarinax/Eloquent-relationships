<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Request;
use App\Http\Requests\StoreBlogPost;
use Auth;
use App\Post;
use App\Comment;
use App\User;


class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->get();
       
       return view('post.index',compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.Show',compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(StoreBlogPost $request)
    {
         $user = Auth::user();
        DB::beginTransaction();
        try {
            $post = new Post();
            $post->title     = $request->title;
            $post->body      = $request->body;
            $post->user_id   = $user->id;

            $post->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            \Log::info($e->getMessage());
            return redirect()->back()->withInput();
        }

        return redirect()->route('posts.index')->with('success',"Post create successfull !!! ");
    }
}
