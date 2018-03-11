@extends('layouts.master') 
@section('content')
<form action="/posts" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group"  >
        <label for="title">Title</label>
        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter title" value="{{ old('title') }}">
        @if($errors->has('title'))
            <small id="emailHelp" class="form-text text-muted">
                <p class="text-danger">
                    {{ $errors->first('title') }}
                </p>
            </small>
        @endif
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" id="body" name="body" placeholder="Enter body" value="{{ old('body') }}">
        @if($errors->has('body'))
            <small id="emailHelp" class="form-text text-muted">
                <p class="text-danger">
                    {{ $errors->first('body') }}
                </p>
            </small>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection