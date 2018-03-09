<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <h1>Post</h1>

    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="/posts/{{$post->id}}">
                        {{$post->title}} {{$post->body}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
    
</body>
</html>