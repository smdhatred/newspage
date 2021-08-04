@extends('layouts.layout')

@section('content')
    <h2>Publish a post:</h2>

    <form action="/post" method="post">

    {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="alias">Alias:</label>
            <input class="form-control" type="text" name="alias" id="alias">
        </div>
        
        <div class="form-group">
            <label for="published_at">Time:</label>
            <input class="form-control" type="time" name="published_at" id="published_at">
        </div>

        <div class="form-group">
            <label for="previev">Previev:</label>
            <textarea class="form-control" type="text" name="previev" id="previev"></textarea>
        </div>

        <div class="form-group">
            <label for="intro">Content:</label>
            <textarea class="form-control" type="text" name="content" id="content"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Post</button>
        </div>

        @include('layouts.errors')

    </form>


@endsection
