@extends('layouts.master') 
@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ isset($post->created_at) ? ($post->created_at)->format('M , d Y') : '' }} by <a href="#">Jacob</a></p>
    <p> {{ $post->body }}</p>
</div>
@endsection
()