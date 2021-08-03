@extends('layouts.layout')
@section('content')
   <h2>News</h2>
   @foreach($posts as $post)
    <div class="col-md-4">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->previev }}</p>
                    <p><a href="/posts/{{$post->id}}" class="btn btn-default">Читать далее</a> </p>
                                        
    </div>
    @endforeach
@endsection
