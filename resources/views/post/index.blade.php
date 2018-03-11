
 @extends('layouts.master')

 @section('slideShow')
    @include('layouts.includes.slideShow')
 @endsection

 @section('display2Items')
    @include('layouts.includes.display2Items')
 @endsection 
 
 @section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="blog-post">
            <a href="{{ url("/posts/{$post->id}")}}">
                    <h2 class="blog-post-title">{{ $post->title }}</h2>
                </a>
            <p class="blog-post-meta">{{ isset($post->created_at) ? ($post->created_at)->format('M , d Y') : '' }} by <a href="#"> {{ $post->user->name }} </a></p>
            <p> {{ $post->body }}</p>
            </div>
            <hr>
            <div class="comments">
                <ul>
                    @foreach($post->comments as $comment)
                        <li class="list-group-item m-1">
                            <strong>
                                {{ $comment->created_at->diffForHumans() }} : &nbsp;
                            </strong>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @endif
 @endsection
