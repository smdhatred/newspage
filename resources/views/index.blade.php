@extends('layouts.layout')
@section('content')
   <h1>News list:</h1>
   @foreach($posts as $post)
    <div class="col-md-4">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->previev }}</p>
                    <p><a href="/posts/{{$post->alias}}" class="btn btn-default">Читать далее</a> </p>
                    <p><a href="/posts/{{$post->alias}}/edit" class="btn btn-primary">Редактировать</a> </p> 
                    <form action="/posts/{{$post->alias}}" method="post">
                        {{csrf_field()}}
                        {!! method_field('delete') !!}
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                   
    </div>
    @endforeach
@endsection
