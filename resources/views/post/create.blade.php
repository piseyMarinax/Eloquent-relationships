@extends('layouts.master') 
@section('content')
<form action="/posts" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control" id="body" placeholder="Enter body">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection