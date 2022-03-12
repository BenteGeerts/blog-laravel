@extends("layouts.app")

@section("content")
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->content}}
    </div>
    <a href="/post" class="btn btn-primary">Go back</a>
@endsection
