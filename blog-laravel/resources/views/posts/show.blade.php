@extends("layouts.app")

@section("content")
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->content}}
    </div>
    <a href="/posts" class="btn btn-primary">Go back</a>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    <form method = "post" action="{{route("posts.destroy", $post->id)}}">
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
