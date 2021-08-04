@extends('layouts.layout')

@section('content')
    <h2>Edit a post:</h2>

    <form action="/post/{{$post->id}}" method="post">

    {{csrf_field()}}
    {!! method_field('patch') !!}
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="alias">Alias:</label>
            <input class="form-control" type="text" name="alias" id="alias" value="{{$post->alias}}">
        </div>
        
        <div class="form-group">
            <label for="published_at">Time:</label>
            <input class="form-control" type="time" name="published_at" id="published_at" value="{{$post->published_at}}">
        </div>

        <div class="form-group">
            <label for="previev">Previev:</label>
            <textarea class="form-control" type="text" name="previev" id="previev" >{{$post->previev}}</textarea>
        </div>

        <div class="form-group">
            <label for="intro">Content:</label>
            <textarea class="form-control" type="text" name="content" id="content">{{$post->content}}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>


        @include('layouts.errors')

    </form>


@endsection
