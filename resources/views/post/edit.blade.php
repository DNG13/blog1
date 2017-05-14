@extends('layouts.layout')
@section('content')
    <h2>Edit a post:</h2>
    <form action="/posts/{{$post->id}}" method="post">
        {{csrf_field()}}
        {!! method_field('patch')!!}
        <div class="form-group">
            <label for="title">Title: </label>
            <input class="form-control" type="text" name="title" required id="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="alias">Alias: </label>
            <input class="form-control" type="text" name="alias" required id="alias" value="{{$post->alias}}">
        </div>
        <div class="form-group">
            <label for="intro">Intro: </label>
            <textarea class="form-control" type="text" name="intro" required  id="intro">{{$post->intro}}</textarea>
        </div>
        <div class="form-group">
            <label for="body">Body: </label>
            <textarea class="form-control" type="text" name="body" required  id="body">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-warning" type="submit">Update</button>
        </div>
        @include('layouts.errors')
    </form>
@endsection