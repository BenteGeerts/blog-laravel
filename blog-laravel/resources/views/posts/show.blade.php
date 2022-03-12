@extends("layouts.app")

@section("content")
    <a href="/posts" class="btn btn-primary">Go back</a>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->content}}
    </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <hr>
    <form method="post" action="{{route("posts.destroy", $post->id)}}">
        @csrf
        <input type="hidden" value="delete" name="_method">
        <button class="btn btn-danger">Delete</button>
    </form>
@endsection
