
 @extends('layouts.master')

 @section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="blog-post">
            <a href="{{ url("/posts/{$post->id}")}}">
                    <h2 class="blog-post-title">{{ $post->title }}</h2>
                </a>
            <p class="blog-post-meta">{{ isset($post->created_at) ? ($post->created_at)->format('M , d Y') : '' }} by <a href="#">Jacob</a></p>
            <p> {{ $post->body }}</p>
            </div>
        @endforeach
    @endif
 @endsection
