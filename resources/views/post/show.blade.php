 
@extends('layouts.master') 

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
<p class="blog-post-meta">{{ isset($post->created_at) ? ($post->created_at)->format('M , d Y') : '' }} by <a href="#">{{ $post->user->name }}</a></p>
    <p> {{ $post->body }}</p>
    <hr>
    <!-- add comment --> 
   <div class="comments">
        <ul>
            @foreach($post->comments as $comment)
            <li class="list-group-item m-1">
                <strong>
                    {{ $comment->created_at->diffForHumans() }} : &nbsp;
                </strong> {{ $comment->body }}
            </li>
            @endforeach
        </ul>
    </div>

    <hr>

    <div class="card p-3">
        <div class="card-block">
            <form action="/posts/{{$post->id}}/comments" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                <textarea class="form-control" rows="5" id="body" name="body" required placeholder="Your comment here">{{ old('body')}}</textarea>
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>

            @include('layouts.includes.errors')
        </div>
    </div>
</div>
@endsection()
 